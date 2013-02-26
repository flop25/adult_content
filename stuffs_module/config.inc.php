<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

$display_options = & $template->get_template_vars('display_options');
$display_options['on_picture'] = false;

$template->assign('MODULE_OPTIONS', '<p>'.l10n('ac_stuffs_info_param').'</p>');

?>