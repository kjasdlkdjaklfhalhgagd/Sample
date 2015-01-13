<?php
session_start();
ob_start();
//require_once('./init.php');

$_SESSION['name'] = $_GET['name'];
if($_SESSION['name'] === ""){
	$_SESSION['name'] = "名無しさん";
}

//dbを使って掲示板を作成
?>
<form action = "./index1.php">
	　　　 　<input type="text" name ="name" value="<?php print $_SESSION['name'];?>" 
					maxlength="10" size="20">
	<br>
	コメント:<input type="text" name="comment" value="">
	<input type="submit" value="commit">
</form>