<?php


class Adultcontent
{
  var $plugin_name, $plugin_path;
  var $idgroups_user = array();
  var $idgroups_ad_c = array();// 0=+18 1=16 2=nothing
  function Adultcontent($plugin_name, $plugin_path)
  {
    // Args
    $this->plugin_name = $plugin_name;
    $this->plugin_path = $plugin_path;
  }
  function fill_idgroups_user()
  {
    global $user;

    $query = 'SELECT group_id FROM ' . USER_GROUP_TABLE . ' WHERE user_id = ' . $user['id'] . ';';
    $result = pwg_query($query);
    while ($row = pwg_db_fetch_assoc($result))
    {
      array_push($this->idgroups_user, $row['group_id']);
    }
  }
  function fill_idgroups_ad_c()
  {
    global $user;

    $query = 'SELECT id FROM ' . GROUPS_TABLE . ' WHERE name IN (\'+18\', \'16-17\', \'nothing\') ORDER BY id';
    $result = pwg_query($query);
    while ($row = pwg_db_fetch_assoc($result))
    {
      array_push($this->idgroups_ad_c, $row['id']);
    }
  }
  function is_in_ad_c_group()
  {
		foreach( $this->idgroups_ad_c as $id )
		{
			if ( in_array($id, $this->idgroups_user))
			{
				return $id;
				exit; 
			}
		}
		return false;
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
		{
      return;
		}
    $menu->register_block(new RegisteredBlock('mbAdultContent', 'Adult Content', 'AC'));
  }
  function ac_lien_menu($menu)
  {
    array_push(
			$menu,
			array('NAME' => 'Adult Content',
            'URL'  => get_admin_plugin_menu_link(get_root_url().'plugins/'.$this->plugin_name.'/admin/admin.php')
						)
		);
    return $menu;
  }
  function get_template($file)
  {
    global $user, $template;
		$r_theme_file=array();
		$dir = $this->plugin_path.'template/';
		$r_theme_file=($template->smarty->template_dir);
		foreach( $r_theme_file as $style)
		{
			$theme_file = explode("/", $style);
			$pos = count($theme_file) - 2 ;
			$theme_file = $dir.$theme_file[$pos].'/'.$file;
			if (file_exists($theme_file))
			{
				return $theme_file;
			}
			else
			{
				$theme_file=NULL;
			}
		
		
		}
		if (empty($theme_file))
		{
				return $dir.'default/'.$file;
		}
  }

  function placer_identification($menu_ref_arr)
  {
///////////////////////[début du plug]////////////////////
    $this->loading_lang();
    global $user, $conf, $page, $template;
    $menu = & $menu_ref_arr[0];
		$conf_plugin = unserialize($conf['ad_c_plugin']);
		$template->assign(
			array(
				'AC_NAME' => AC_NAME
				));


    //include($this->var_template());
    if (is_a_guest() and $conf_plugin['menublock_for_guest']=='true')
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
    elseif (is_a_guest() and $conf_plugin['menublock_for_guest']!='true')
    {  
		  $menu->hide_block('mbAdultContent');
    }
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
    elseif (!is_admin() and $user['status']!="generic")
    {
////////////lié à quoi/////	
			$this->fill_idgroups_user();
			$this->fill_idgroups_ad_c();	

			if ( !$this->is_in_ad_c_group() )// lié à rien
			{
				$template->assign(
					array(
					'AC_MSG' => l10n('ac_charte_user_not')
					));
				$menu = & $menu_ref_arr[0];
				if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
					//$block->set_title(l10n('ac_title_choose'));
					$block->template = $this->get_template('choose.tpl');
				}
				$query = 'SELECT id FROM ' . GROUPS_TABLE . ' WHERE name IN (\'+18\', \'16-17\', \'nothing\') ORDER BY id';
				$result = pwg_query($query);
				if ( isset($conf['UserAdvManager']) )
				{
					$conf_UAM_2 = unserialize($conf['UserAdvManager']);
					if ( in_array($conf_UAM_2[2], $this->idgroups_user))/// $conf_UAM_2[2] est le groupe des user en attente de modération
					{
						$menu->hide_block('mbAdultContent');
					}
				}

			}
			else
			{	   
				$link=$this->is_in_ad_c_group();
				if ($link == $this->idgroups_ad_c[0])
				{
					$statut = l10n('ac_user_text_18');
				}
				if ($link ==  $this->idgroups_ad_c[1])
				{
					$statut = l10n('ac_user_text_16');
				}
				if ($link ==  $this->idgroups_ad_c[2])
				{
					$statut = l10n('ac_user_no_s');
				}
				$template->assign(
				array(
				'AC_MSG' => $statut.". ".l10n('ac_charte_user_def')
				));
				$menu = & $menu_ref_arr[0];
				if (($block = $menu->get_block( 'mbAdultContent' )) != null) {
					$block->set_title(l10n('ac_title_menu_statut'));
					$block->template = $this->get_template('choose.tpl');
				}

	  }
	}

  }//fin placer_identification
  function on_register()
  {
	  if ( !function_exists('UAM_admin_menu'))
		{
			include_once( PHPWG_ROOT_PATH.'include/common.inc.php' );
			$user_id = get_userid($_POST['login']);
			log_user( $user_id, false);
      redirect(PHPWG_ROOT_PATH.'plugins/adult_content/charte_user.php');
		}
  }
  function ac_stuffs_module($modules)
  {
    load_language('plugin.lang', $this->plugin_path);
    array_push($modules, array(
      'path' => PHPWG_PLUGINS_PATH . AC_NAME . '/stuffs_module/',
      'name' => l10n('ac_text'),
      'description' => l10n('Disclaimer for the guest, with the ability to choose its age'),
      )
    );
    return $modules;
  }

}//fin class
?>