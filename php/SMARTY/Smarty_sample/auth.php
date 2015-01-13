<?php

/*
***初期設定
*/
require_once dirname(__FILE__).'./../Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->template_dir = './../smarty_work/templates/';
$smarty->compile_dir  = './../smarty_work/templates_c/';
