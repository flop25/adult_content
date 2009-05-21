<?php


class Adultcontent
{
  var $plugin_name, $plugin_path;
  
  function Adultcontent($plugin_name, $plugin_path)
  {
    // Args
    $this->plugin_name = $plugin_name;
    $this->plugin_path = $plugin_path;
    // handler
   // $this->initialize_event_handler();
  }
  
  function get_link_icon($main_link, $action)
  {
    $link_url = add_url_params($main_link, array('ad' => $action));
    return $link_url;
  }
  
  function loading_lang()
  {
    global $lang;
    //include(get_language_filepath('plugin.lang.php', $this->plugin_path));
	load_language('plugin.lang', $this->plugin_path);
  }  
  /*
  function remove_code($tlp_handle, $str_begin, $str_end)
  {
      global $template;
 
      $template->loadfile($tlp_handle);
 
      $p_beg = strpos($template->uncompiled_code[$tlp_handle], $str_begin);
      $p_end = strpos($template->uncompiled_code[$tlp_handle], $str_end) + strlen($str_end);
      $s = substr($template->uncompiled_code[$tlp_handle], $p_beg, $p_end - $p_beg);
 
      $template->uncompiled_code[$tlp_handle] = 
      substr_replace($template->uncompiled_code[$tlp_handle], '', $p_beg, $p_end - $p_beg);
 
      return $s;
  }
  
  function add_before_code($tlp_handle, $insert_before, $code)
  {
      global $template;
 
      $template->loadfile($tlp_handle);
      $template->uncompiled_code[$tlp_handle] = str_replace($insert_before, $code.$insert_before, $template->uncompiled_code[$tlp_handle]);
  } 
  function add_after_code($tlp_handle, $insert_after, $code)
  {
    global $template;
 
    $template->loadfile($tlp_handle);
    $template->uncompiled_code[$tlp_handle] = str_replace($insert_after, $insert_after.$code, $template->uncompiled_code[$tlp_handle]);
  }*/
  function var_template()
  {
    global $user;
    if ($user['template'] == 'flop_pure_design')
    {
      $r = 'var_fpd.inc.php';	
    }
    else
    {
     $r = 'var.inc.php';	
    }
   return $r;
  }
  function link_charte_user($etat)
  {
  global $user, $lang;
  include($this->var_template());
  if ($etat == 'not_defined')
  {
      /*$s = $this->remove_code('menubar',$begin_ident ,$end_ident);
      $this->add_before_code('menubar','<!-- BEGIN links -->',$s); 	  
      $this->add_after_code('menubar','<!-- END hello -->
    <ul>','<a href="'.get_root_url().'plugins/'.$this->plugin_name.'/charte_user.php?etat='.$etat.'">{lang:ac_charte_user_not}</a>');*/
  }
  elseif ($etat == 'defined')
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
	 $statut = $lang['ac_user_text_18'];
	 }
	 if ($data_group_n['name'] == '16-17')
	 {
	 $statut = $lang['ac_user_text_16'];
	 }
	 if ($data_group_n['name'] == 'nothing')
	 {
	 $statut = $lang['ac_user_no_s'];
	 }

	  /*$this->add_after_code('menubar','<!-- END hello -->
    <ul>',''.$statut.' <a href="'.get_root_url().'plugins/'.$this->plugin_name.'/charte_user.php?etat='.$etat.'">{lang:ac_logout}</a>');*/
  }
      

  }

  function register_ac_menubar_blocks($menu_ref_arr) {
    $menu = & $menu_ref_arr[0];
    if ($menu->get_id() != 'menubar')
      return;
    $menu->register_block(new RegisteredBlock('mbAdultContent', 'Adult Content', 'AC'));
  }

  function placer_identification($menu_ref_arr)
  {
///////////////////////[début du plug]////////////////////
    $this->loading_lang();
    global $user, $conf, $page;
  	global $template;

    $menu = & $menu_ref_arr[0];
	
$template->assign(
  array(
    'AC_NAME' => AC_NAME
    ));


    //include($this->var_template());
    if (is_a_guest())
	{
	
///////////////////////[gestion fermer/ouvert]////////////////////
	  if ( !isset( $_GET['ad'] ) )
	  {	     
	      if ( !isset( $_COOKIE['pwg_adult_content'] ) or $_COOKIE['pwg_adult_content'] == 'open' )
	      {	
	        //$this->add_before_code('menubar','<!-- BEGIN links -->', $msg_opened);
			$template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'closed')    ));
            if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->plugin_path.'template/'.$user['template'].'/opened.tpl';
            }
	      }
          elseif ( $_COOKIE['pwg_adult_content'] == 'closed' )
	      {
	        //$this->add_before_code('menubar','<!-- BEGIN links -->', $msg_closed);
            $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'open')    ));
			if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_fermer'));
               $block->template = $this->plugin_path.'template/'.$user['template'].'/closed.tpl';
            }
			
	      }
	  }
	  elseif (  $_GET['ad'] == 'closed' )
	  {
	    //$this->add_before_code('menubar','<!-- BEGIN links -->', $msg_closed);
        $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'open')    ));
		setcookie( 'pwg_adult_content', 'closed', time()+60*60*24*30, cookie_path() );	  
            if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_fermer'));
               $block->template = $this->plugin_path.'template/'.$user['template'].'/closed.tpl';
            }
	  }
	  elseif (  $_GET['ad'] == 'open' )
	  {
	    //$this->add_before_code('menubar','<!-- BEGIN links -->', $msg_opened);
            $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'closed')    ));
			if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->plugin_path.'template/'.$user['template'].'/opened.tpl';
            }

        setcookie( 'pwg_adult_content', 'open', time()+60*60*24*30, cookie_path() );	  
	  }
///////////////////////[FIN fermer/ouvert]////////////////////
    }//fin if guest
    elseif ($user['username'] == '18')
    {  
      $this->remove_code('menubar', '<dl id="mbIdentification">', '<!-- END quickconnect -->

  </dd>
</dl>');
  
      $this->add_before_code('menubar','<!-- BEGIN tags -->',$msg_18);
	  
	  $_SESSION['age']="18"; 
        setcookie( 'age', '18', time()+60*60*24*30, cookie_path() );	  

    }//fin if 18 ans
    elseif ($user['username'] == '16')
    {
      $this->remove_code('menubar', '<dl id="mbIdentification">', '<!-- END quickconnect -->

  </dd>
</dl>');
  
      $this->add_before_code('menubar','<!-- BEGIN tags -->',$msg_16);

    }//fin if 16-17 ans
    elseif (!is_admin())
    {
	
////////////lié à quoi/////	
	 $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'+18\')
;';
     $data_18 = mysql_fetch_array(pwg_query($query));
	 $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'16-17\')
;';
     $data_16 = mysql_fetch_array(pwg_query($query));
	 $query = '
SELECT id FROM '.GROUPS_TABLE.'
  WHERE name IN (\'nothing\')
;';
     $data_no = mysql_fetch_array(pwg_query($query));
	 $n_query = '
SELECT COUNT(*) AS result FROM '.USER_GROUP_TABLE.'
  WHERE group_id IN (\''.$data_18['id'].'\',\''.$data_16['id'].'\',\''.$data_no['id'].'\') AND user_id IN (\''.$user['id'].'\')
;';
      $data_user = mysql_fetch_array(pwg_query($n_query));
	  $is_grouped = $data_user['result'];   

	  if ( $is_grouped == 0 )
	  {
	  $this->link_charte_user('not_defined');
	  }
	  else
	  {	   
	  $this->link_charte_user('defined');
	  }
	}

  }//fin placer_identification
  function on_register()
  {
	  include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );
    $user_id = get_userid($_POST['login']);
    log_user( $user_id, false);
      redirect(PHPWG_ROOT_PATH.'plugins/adult_content/charte_user.php?etat=not_defined');
  } 
}//fin class
?>