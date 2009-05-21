<?php
define('PHPWG_ROOT_PATH','../../');
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');

$adult_content = get_plugin_data('adult_content');


$title = 'Adult content';
$page['body_id'] = 'adult_content_page';
include(PHPWG_ROOT_PATH.'include/page_header.php');


//include(get_language_filepath('plugin.lang.php', $adult_content->plugin_path));
load_language('plugin.lang', $adult_content->plugin_path);
$template->assign(
  array(
    'PLUGIN_NAME' => $adult_content->plugin_name
    ));

$template->set_filename('controller', $adult_content->plugin_path.'include/charte.tpl');

// +-----------------------------------------------------------------------+
// | html code display                                                     |
// +-----------------------------------------------------------------------+
$template->parse('controller');
include(PHPWG_ROOT_PATH.'include/page_tail.php');
?>