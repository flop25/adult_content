<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$ad_c = get_plugin_data('adult_content');

global $conf, $template, $lang, $page;
global $prefixeTable;
load_language('plugin.lang', $ad_c->plugin_path);
$conf_ad_c = explode("," , $conf['ad_c_plugin']);


$page['infos'] = array();

if (isset($_POST['option_ad_c']))
{
	$newconf_plugin = (isset($_POST['menublock_for_guest'])) ? 'true' : 'false';
	$newconf_plugin .= (isset($_POST['block_on_index'])) ? ',true' : ',false';
	//$newconf_plugin = implode ("," , $newconf_plugin);
	$query = '
		UPDATE '.CONFIG_TABLE.'
		SET value="'.$newconf_plugin.'"
		WHERE param="ad_c_plugin"
		LIMIT 1';
	pwg_query($query);
				
	array_push($page['infos'], l10n('ad_c_msg_admin_1'));
}

load_conf_from_db();
$conf_ad_c = explode("," , $conf['ad_c_plugin']);

$check='checked="checked"';
if ($conf_ad_c[0]=='true') { $menublock=$check; } else { $menublock=NULL; } 
if ($conf_ad_c[1]=='true') { $index=$check; } else { $index=NULL; }
$disabled='disabled="disabled"';
	$template->assign(
		array(
		  'AD_C_menublock_for_guest' => $menublock,
		  'AD_C_block_on_index' => $index,
		  'AD_C_block_on_index_disabled' => $disabled,
		)
	  );

$template->set_filename('plugin_admin_content', $ad_c->plugin_path.'admin/admin.tpl');
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');
?>