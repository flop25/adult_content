<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
$adult_content = get_plugin_data('adult_content');
if ( is_a_guest() )
{
	redirect(make_index_url());
}
if (!isset( $_POST['groupe'] ))
{
   $title = 'Adult content';
   $page['body_id'] = 'adult_content_page';
   include(PHPWG_ROOT_PATH.'include/page_header.php');
   load_language('plugin.lang', $adult_content->plugin_path);

   $template->assign(
     array(
       'PLUGIN_NAME' => $adult_content->plugin_name
       ));
////////////lié à quoi/////	
			$adult_content->fill_idgroups_user();
			$adult_content->fill_idgroups_ad_c();	

	if (!is_a_guest() and !$adult_content->is_in_ad_c_group())
	{
		 $template->assign(
			 array(
				 'EXPLIC' => $lang['ac_not_def'],
				 'MAIN'  => $lang['ac_text_charte'],
					)
			 );
	}
	elseif (!is_a_guest()  and $adult_content->is_in_ad_c_group() )
	{
		$link=$adult_content->is_in_ad_c_group();
		if ($link == $adult_content->idgroups_ad_c[0])
		{
			 $statut = $lang['ac_statut'].$lang['ac_user_text_18'];
		}
		if ($link ==  $adult_content->idgroups_ad_c[1])
		{
			 $statut = $lang['ac_statut'].$lang['ac_user_text_16'];
		}
		if ($link ==  $adult_content->idgroups_ad_c[2])
		{
			 $statut = $lang['ac_user_no'];
		}
	 
     $main = '<p>'.$statut.'</p>'
	        .'<p><a href="javascript:void(0)" OnClick="history.back()" >'.$lang['ac_retour_c'].'</a></p>';
       $template->assign(
         array(
           'EXPLIC' => $lang['ac_def'],
           'MAIN'  => $main,
            )
         );
   }
   else
   {
		redirect(make_index_url());
   }

   $template->set_filename('charte', $adult_content->plugin_path.'include/charte_user.tpl');

   $template->parse('charte');
   include(PHPWG_ROOT_PATH.'include/page_tail.php');

}//fin if !isset( $_POST['groupe'] )
elseif ( $_POST['groupe'] == '+18' or $_POST['groupe'] == '16-17' or $_POST['groupe'] == 'nothing')
{
////////////anciennement lié à quoi/////	
			$adult_content->fill_idgroups_user();
			$adult_content->fill_idgroups_ad_c();
   ////////////placer dans group////////////
      $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\''. $_POST['groupe'].'\')
;';
      $data_group = mysql_fetch_array(pwg_query($query));
	  
      if (!$adult_content->is_in_ad_c_group())
	  {
      pwg_query('INSERT INTO '.USER_GROUP_TABLE.' VALUES(\''.$user['id'].'\', \''.$data_group['id'].'\' )' );
	  }
      else
	  {
      pwg_query('UPDATE '.USER_GROUP_TABLE.' SET group_id=\''.$data_group['id'].'\' WHERE user_id IN (\''.$user['id'].'\') AND group_id IN (\''.$adult_content->is_in_ad_c_group().'\')' );
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