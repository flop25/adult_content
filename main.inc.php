<?php
/*
Plugin Name: adult_content
Version: auto
Description: manage adult content
Plugin URI: http://piwigo.org/ext/extension_view.php?eid=141
Author: Flop25
Author URI: http://www.planete-flop.fr/
Has Settings: true
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
if (!defined('IN_ADMIN') or !IN_ADMIN)
{
	add_event_handler('register_user', array(&$adult_content, 'on_register') );
}
// Ajout une entr�e dans le menubar
add_event_handler('blockmanager_register_blocks', array(&$adult_content, 'register_ac_menubar_blocks'));
add_event_handler('blockmanager_apply', array(&$adult_content, 'placer_identification'));
//block on index

add_event_handler('get_stuffs_modules', array(&$adult_content, 'ac_stuffs_module'));


add_event_handler('loc_end_picture', 'comment_manage');
function comment_manage()
{
	global $user, $template, $conf;
	if ( isset($conf['comments_forall']) ) {
	if ( ($user['username']=='18' or $user['username']=='16') and !$conf['comments_forall'] )
	{
		$template->clear_assign('comment_add');
	}}
}
$adult_content = new Adultcontent($plugin_name, $plugin_path);
set_plugin_data($adult_content->plugin_name, $adult_content);

?>