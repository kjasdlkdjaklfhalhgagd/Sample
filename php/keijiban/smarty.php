<?php

require_once(__DIR__ .'./../../../Smarty/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = dirname( __FILE__ ).'./../smarty_in/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'./../smarty_in/templates_c';