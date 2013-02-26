<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

global $page, $conf;

// RSS Feed only available in category or index gallery
if (isset($page['section']) and $page['section'] == 'categories')
{
  include_once( AC_PATH.'/class.inc.php');
  $conf_ad_c = unserialize($conf['ad_c_plugin']);

  $adult_content = new Adultcontent(AC_NAME, AC_PATH);
  set_plugin_data($adult_content->plugin_name, $adult_content);

  if ( is_a_guest() and $conf_ad_c['menublock_for_guest']=='true')
  {
    load_language('plugin.lang', $adult_content->plugin_path);
    load_language('lang', PHPWG_ROOT_PATH.PWG_LOCAL_DIR, array('no_fallback'=>true, 'local'=>true) );
    $block['PLUGIN_NAME'] = $adult_content->plugin_name;
    $block['AD_C_manage_what'] =  $conf_ad_c['manage_what'];
    $block['TEMPLATE'] = realpath(AC_PATH.'/stuffs_module/disclaimer.tpl');
    // from logon bloc
    $block = array_merge($block, 
      array(
        'U_LOST_PASSWORD' => get_root_url().'password.php',
        'F_LOGIN_ACTION' => get_root_url().'identification.php',
        'authorize_remembering' => $conf['authorize_remembering'],
        ));
    
    if ($conf['allow_user_registration'])
    {
      $block['U_REGISTER'] = get_root_url().'register.php';
    }
    
    // Retirer le bloc identification rapide du menubar
    add_event_handler('blockmanager_apply', 'stuffs_hide_identification');
    function stuffs_hide_identification($menu_ref_arr)
    {
      $menu = & $menu_ref_arr[0];
      $menu->hide_block('mbIdentification');
    }
  }
  /*elseif ( isset($_POST['groupe']) and ( $_POST['groupe'] == '+18' or $_POST['groupe'] == '16-17' or $_POST['groupe'] == 'nothing') )
  {
  ////////////anciennement lié à quoi/////	
        $adult_content->fill_idgroups_user();
        $adult_content->fill_idgroups_ad_c();
     ////////////placer dans group////////////
        $query = '
  SELECT id FROM '.GROUPS_TABLE.'
    WHERE name IN (\''. $_POST['groupe'].'\')
  ;';
        $data_group = pwg_db_fetch_array(pwg_query($query));
      
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
  elseif (!isset( $_POST['groupe'] ))
  {
    $title = 'Adult content';
    $page['body_id'] = 'adult_content_page';
    include(PHPWG_ROOT_PATH.'include/page_header.php');
    load_language('plugin.lang', $adult_content->plugin_path);
    load_language('lang', PHPWG_ROOT_PATH.PWG_LOCAL_DIR, array('no_fallback'=>true, 'local'=>true) );
    $template->assign(
     array(
       'PLUGIN_NAME' => $adult_content->plugin_name
    ));
  ////////////lié à quoi/////	
    $adult_content->fill_idgroups_user();
    $adult_content->fill_idgroups_ad_c();	
  
    if (!$adult_content->is_in_ad_c_group())
    {
       $template->assign(
         array(
           'EXPLIC' => $lang['ac_not_def'],
           'MAIN'  => $lang['ac_text_charte'],
            )
         );
    }
    elseif ($adult_content->is_in_ad_c_group() )
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
      $template->assign(
      array(
        'AD_C_manage_what' => $conf_ad_c['manage_what'],
      )
      );
  
     $template->set_filename('charte', $adult_content->plugin_path.'include/charte_user.tpl');
  
     $template->parse('charte');
     include(PHPWG_ROOT_PATH.'include/page_tail.php');
  
  }*///fin if !isset( $_POST['groupe'] )

  
}

?>