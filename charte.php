<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
$conf_ad_c = explode("," , $conf['ad_c_plugin']);
if ( !is_a_guest() or $conf_ad_c[0]!='true')
{
	redirect(make_index_url());
}


$adult_content = get_plugin_data('adult_content');


$title = 'Adult content';
$page['body_id'] = 'adult_content_page';
include(PHPWG_ROOT_PATH.'include/page_header.php');


//include(get_language_filepath('plugin.lang.php', $adult_content->plugin_path));
load_language('plugin.lang', $adult_content->plugin_path);
load_language('lang', PHPWG_ROOT_PATH.PWG_LOCAL_DIR, array('no_fallback'=>true, 'local'=>true) );
$template->assign(
  array(
    'PLUGIN_NAME' => $adult_content->plugin_name,
    'AD_C_manage_what' => $conf_ad_c[2],
    ));
$template->set_filename('controller', $adult_content->plugin_path.'include/charte.tpl');

// +-----------------------------------------------------------------------+
// | html code display                                                     |
// +-----------------------------------------------------------------------+
$template->parse('controller');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>