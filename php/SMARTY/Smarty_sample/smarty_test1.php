<?php

//最低設定
//Smarty.class.phpを読み込む
/* 相対パスで書くよりも絶対パスで記述するほうがかなり早くなるらしい
require_once('./../Smarty/libs/Smarty.class.php');*/
require_once dirname(__FILE__).'./../Smarty/libs/Smarty.class.php';

$smarty = new Smarty();

/*各テンプレートフォルダのディレクトリを読み込む*/

$smarty->template_dir = './../smarty_work/templates/';
$smarty->compile_dir  = './../smarty_work/templates_c/';

$smarty->assign('msg', 'Hello Smarty');
$smarty->display('./../smarty_work/templates/sample_1.tpl');