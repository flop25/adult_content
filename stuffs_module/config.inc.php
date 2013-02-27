<?php

if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

$display_options = & $template->get_template_vars('display_options');
$display_options['on_picture'] = false;

$template->assign('MODULE_OPTIONS', '<p>'.l10n('No options. Just check "Allow unregistered users to select their age?" on the Adult Content administration page').'</p>');

?>