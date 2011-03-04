<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
$adult_content = get_plugin_data('adult_content');

if (!isset( $_POST['groupe'] ))
{
   $title = 'Adult content';
   $page['body_id'] = 'adult_content_page';
   include(PHPWG_ROOT_PATH.'include/page_header.php');
   //include(get_language_filepath('plugin.lang.php', $adult_content->plugin_path));
   load_language('plugin.lang', $adult_content->plugin_path);

   $template->assign(
     array(
       'PLUGIN_NAME' => $adult_content->plugin_name
       ));

   if (isset($_GET['etat']) and $_GET['etat'] == 'not_defined')
   {
       $template->assign(
         array(
           'EXPLIC' => $lang['ac_not_def'],
           'MAIN'  => $lang['ac_text_charte'],
           'ETAT'  => $_GET['etat'],
            )
         );
   }
   elseif (isset($_GET['etat']) and $_GET['etat'] == 'defined')
   {
   	 $query = '
SELECT group_id FROM '.USER_GROUP_TABLE.'
  WHERE user_id IN (\''.$user['id'].'\')
;';
     $data_group = mysql_fetch_array(pwg_query($query));
   	 $query = '
SELECT name FROM '.GROUPS_TABLE.'
  WHERE id IN (\''.$data_group['group_id'].'\')
;';
     $data_group_n = mysql_fetch_array(pwg_query($query));
	 if ($data_group_n['name'] == '+18')
	 {
	 $statut = $lang['ac_statut'].$lang['ac_user_text_18'];
	 }
	 if ($data_group_n['name'] == '16-17')
	 {
	 $statut = $lang['ac_statut'].$lang['ac_user_text_16'];
	 }
	 if ($data_group_n['name'] == 'nothing')
	 {
	 $statut = $lang['ac_user_no'];
	 }
	 
     $main = '<p>'.$statut.'</p>'
	        .'<p><a href="javascript:void(0)" OnClick="history.back()" >'.$lang['ac_retour_c'].'</a></p>';
       $template->assign(
         array(
           'EXPLIC' => $lang['ac_def'],
           'MAIN'  => $main,
           'ETAT'  => $_GET['etat'],
            )
         );
   }
   else
   {
   die('Hacking attempt!');
   }

   $template->set_filename('charte', $adult_content->plugin_path.'include/charte_user.tpl');

   $template->parse('charte');
   include(PHPWG_ROOT_PATH.'include/page_tail.php');

}//fin if !isset( $_POST['groupe'] )
elseif ( $_POST['groupe'] == '+18' or $_POST['groupe'] == '16-17' or $_POST['groupe'] == 'nothing')
{

   ////////////placer dans group////////////
      $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\''. $_POST['groupe'].'\')
;';
      $data_group = mysql_fetch_array(pwg_query($query));
	  
      if ($_POST['etat'] == 'not_defined')
	  {
      pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.$user['id'].'\', \''.$data_group['id'].'\' )' );
	  }
      elseif ($_POST['etat'] == 'defined')
	  {
      pwg_query('UPDATE '.USER_GROUP_TABLE.' SET group_id=\''.$data_group['id'].'\' WHERE user_id IN (\''.$user['id'].'\')' );
	  }
	  $query = '
DELETE FROM '.USER_CACHE_TABLE.'
  WHERE user_id = '.$user['id'];
      pwg_query($query);
	  log_user( $user['id'], false);
      redirect(make_index_url());
}
else
{
die('Hacking attempt!');
}
?>