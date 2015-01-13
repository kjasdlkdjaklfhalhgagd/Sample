<?php
require_once('./auth.php');

$primary_wepon = array(
	1 => 'アテオンズエピオーグ',
	2 => 'ビジョン・コンフルエンス',
	3 => 'フェイトブリンガー'
	);

$smarty->assign('myarray',$primary_wepon);
$smarty->display('./../smarty_work/templates/sample_2.php');