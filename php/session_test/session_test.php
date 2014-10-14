<?php

ob_start();
session_start();

$_SESSION['level']++;

//削除
if (1 <=  abs((int)@$_GET['num'])) {
	$_SESSION['level'] = "" ;
}

?>

<p><?php echo $_SESSION['level'];?></p>

<a href="session_test.php?num=0">レベルアップ</a>
<a href="session_test.php?num=2">初期化</a>
