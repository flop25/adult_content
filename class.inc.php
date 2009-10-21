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
	load_language('plugin.lang', $this->plugin_path);
  }  
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

  function register_ac_menubar_blocks($menu_ref_arr) {
    $menu = & $menu_ref_arr[0];
    if ($menu->get_id() != 'menubar')
      return;
    $menu->register_block(new RegisteredBlock('mbAdultContent', 'Adult Content', 'AC'));
  }
  function ac_lien_menu($menu)
  {
    array_push($menu, array('NAME' => 'Adult Content',
            'URL' => get_admin_plugin_menu_link(get_root_url().'plugins/'.$this->plugin_name.'/admin/admin.php')));
    return $menu;
  }
  function get_template($file)
  {
    global $user, $template;

    $dir = $this->plugin_path.'template/';
    $theme_file = $dir.$user['template'].'/'.$user['theme'].'/'.$file;
    $template_file = $dir.$user['template'].'/'.$file;

    if (file_exists($theme_file))
    {
      return $theme_file;
    }
    elseif (file_exists($template_file))
    {
      return $template_file;
    }
    else
    {
      return $dir.'yoga/'.$file;
    }
  }

  function set_block_on_index ()
  {
	global $page, $template;

	if (isset($page['section']) and $page['section'] == 'categories')
	{
		$template->set_filename('ac_block', realpath($this->get_template('block.tpl') ) );
		$begin = 'PLUGIN_INDEX_CONTENT_BEFORE';
		$end = 'PLUGIN_INDEX_CONTENT_AFTER';
		$template->concat($begin,	$template->parse('ac_block', true));
	}
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
			$template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'closed')    ));
            if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->get_template('opened.tpl');
            }
	      }
          elseif ( $_COOKIE['pwg_adult_content'] == 'closed' )
	      {
            $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'open')    ));
			if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_fermer'));
               $block->template = $this->get_template('closed.tpl');
            }
			
	      }
	  }
	  elseif (  $_GET['ad'] == 'closed' )
	  {
        $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'open')    ));
		setcookie( 'pwg_adult_content', 'closed', time()+60*60*24*30, cookie_path() );	  
            if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_fermer'));
               $block->template = $this->get_template('closed.tpl');
            }
	  }
	  elseif (  $_GET['ad'] == 'open' )
	  {
            $template->assign(array(  'LINK' => $this->get_link_icon(duplicate_index_url(), 'closed')    ));
			if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->get_template('opened.tpl');
            }

        setcookie( 'pwg_adult_content', 'open', time()+60*60*24*30, cookie_path() );	  
	  }
///////////////////////[FIN fermer/ouvert]////////////////////
    }//fin if guest
    elseif ($user['username'] == '18')
    {  
		$menu->hide_block('mbIdentification');
		$template->assign(
		  array(
			'AC_MSG' => l10n('ac_user_text_18')
			));
		if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->get_template('msg.tpl');
        }
	  
	  $_SESSION['age']="18"; 
        setcookie( 'age', '18', time()+60*60*24*30, cookie_path() );	  

    }//fin if 18 ans
    elseif ($user['username'] == '16')
    {
		$menu->hide_block('mbIdentification');
		$template->assign(
		  array(
			'AC_MSG' => l10n('ac_user_text_16')
			));
		if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
               $block->set_title(l10n('ac_title_menu'));
               $block->template = $this->get_template('msg.tpl');
        }

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
		$template->assign(
		  array(
			'AC_ETAT' => 'not_defined',
			'AC_MSG' => l10n('ac_charte_user_not')
			));
		$menu = & $menu_ref_arr[0];
		$block = $menu->get_block( 'mbAdultContent' );
		$block->set_title(l10n('ac_title_choose'));
		$block->template = $this->plugin_path.'template/'.$user['template'].'/choose.tpl';

	  }
	  else
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
		   $statut = l10n('ac_user_text_18');
		   }
		   if ($data_group_n['name'] == '16-17')
		   {
		   $statut = l10n('ac_user_text_16');
		   }
		   if ($data_group_n['name'] == 'nothing')
		   {
		   $statut = l10n('ac_user_no_s');
		   }
		$template->assign(
		  array(
			'AC_ETAT' => 'defined',
			'AC_MSG' => $statut.". ".l10n('ac_charte_user_def')
			));
		$menu = & $menu_ref_arr[0];
		$block = $menu->get_block( 'mbAdultContent' );
		$block->set_title(l10n('ac_title_menu_statut'));
		$block->template = $this->plugin_path.'template/'.$user['template'].'/choose.tpl';

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