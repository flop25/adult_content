<?php
/*
Plugin Name: adult_content
Version: 2.0.1
Description: manage adult content / Gerer du contenu adulte
Plugin URI: http://phpwebgallery.net/ext/extension_view.php?eid=141
Author: Flop25
Author URI: http://flop25.free.fr

*/

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

$plugin_name = basename(dirname(__FILE__));
$plugin_path = dirname(__FILE__).'/';
define('AC_PATH', dirname(__FILE__).'/' );
define('AC_NAME', basename(dirname(__FILE__)) );

global $prefixeTable;
define('AC_CONF' , $prefixeTable . 'ac_config');

include_once(dirname(__FILE__).'/class.inc.php');
add_event_handler('get_admin_plugin_menu_links', array(&$adult_content, 'ac_lien_menu') );
add_event_handler('register_user', array(&$adult_content, 'on_register') );
// Ajout une entrée dans le menubar
add_event_handler('blockmanager_register_blocks', array(&$adult_content, 'register_ac_menubar_blocks'));
add_event_handler('blockmanager_apply', array(&$adult_content, 'placer_identification'));
//block on index
add_event_handler('loc_begin_index', array(&$adult_content, 'set_block_on_index'));


add_event_handler('loc_end_picture', 'comment_manage');
function comment_manage()
{
	global $user, $template;
	if ( ($user['username']=='18' or $user['username']=='16') and !$conf['comments_forall'] )
	{
		$template->clear_assign('comment_add');
	}
}
$adult_content = new Adultcontent($plugin_name, $plugin_path);
set_plugin_data($adult_content->plugin_name, $adult_content);

?>