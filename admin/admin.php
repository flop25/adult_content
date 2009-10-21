<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
$ad_c = get_plugin_data('adult_content');

global $conf, $template, $lang, $page;
global $prefixeTable;
load_language('plugin.lang', $ad_c->plugin_path);

$page['infos'] = array();


?>