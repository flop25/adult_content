<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$ad_c = get_plugin_data('adult_content');

global $conf, $template, $lang, $page;
global $prefixeTable;
load_language('plugin.lang', $ad_c->plugin_path);
$conf_ad_c = unserialize($conf['ad_c_plugin']);


$page['infos'] = array();

if (isset($_POST['option_ad_c']))
{
  $newconf_plugin=array();
	$newconf_plugin['menublock_for_guest'] = (isset($_POST['menublock_for_guest'])) ? true : false;
	$newconf_plugin['manage_what'] = (isset($_POST['manage_what'])) ? $_POST['manage_what'] : 'both';
	$query = '
		UPDATE '.CONFIG_TABLE.'
		SET value="'.pwg_db_real_escape_string(serialize($newconf_plugin)).'"
		WHERE param="ad_c_plugin"
		LIMIT 1';
	pwg_query($query);
				
	array_push($page['infos'], l10n('ad_c_msg_admin_1'));
  load_conf_from_db();
  $conf_ad_c = unserialize($conf['ad_c_plugin']);
}


$check='checked="checked"';
if ($conf_ad_c['menublock_for_guest']=='true') { $menublock=$check; } else { $menublock=NULL; } 
$template->assign(
  array(
    'AD_C_manage_what' => $conf_ad_c['manage_what'],
    'AD_C_menublock_for_guest' => $menublock,
    'AD_C_LANG' => $user['language'],
  )
  );


$template->set_filename('plugin_admin_content', $ad_c->plugin_path.'admin/admin.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>