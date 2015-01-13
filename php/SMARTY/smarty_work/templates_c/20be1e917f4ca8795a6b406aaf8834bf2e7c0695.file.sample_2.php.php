<?php /* Smarty version Smarty-3.1.18, created on 2014-12-02 09:12:31
         compiled from "../smarty_work/templates/sample_2.php" */ ?>
<?php /*%%SmartyHeaderCode:917984508547d7395e96810-40453292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20be1e917f4ca8795a6b406aaf8834bf2e7c0695' => 
    array (
      0 => '../smarty_work/templates/sample_2.php',
      1 => 1417507949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '917984508547d7395e96810-40453292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_547d7395f10485_77785337',
  'variables' => 
  array (
    'myarray' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547d7395f10485_77785337')) {function content_547d7395f10485_77785337($_smarty_tpl) {?><!DOCTYPE html>
<html lang="UTF-8">
<head>
	<meta charset="UTF-8">
	<title>smartyのforeach</title>
</head>
<body>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['myarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</li>
<?php } ?>
</body>
</html><?php }} ?>
