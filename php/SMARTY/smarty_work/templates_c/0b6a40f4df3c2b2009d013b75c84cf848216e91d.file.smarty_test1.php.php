<?php /* Smarty version Smarty-3.1.18, created on 2014-12-02 08:37:40
         compiled from "smarty_test1.php" */ ?>
<?php /*%%SmartyHeaderCode:981563250547d69d6c37a48-42840589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b6a40f4df3c2b2009d013b75c84cf848216e91d' => 
    array (
      0 => 'smarty_test1.php',
      1 => 1417505858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981563250547d69d6c37a48-42840589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d69d6c9ba51_12110240',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d69d6c9ba51_12110240')) {function content_547d69d6c9ba51_12110240($_smarty_tpl) {?><<?php ?>?php

//最低設定
//Smarty.class.phpを読み込む
require_once('./../Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

/*各テンプレートフォルダのディレクトリを読み込む*/

$smarty->template_dir = './../smarty_work/templates/';
$smarty->compile_dir  = './../smarty_work/templates_c/';

$smarty->assign('msg', 'Hello Smarty');
$smarty->display('smarty_test1.php');<?php }} ?>
