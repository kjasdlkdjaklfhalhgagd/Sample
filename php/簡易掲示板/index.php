<?php
session_start();
ob_start();

include './db.php';

?>

<!DOCUTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<titile>掲示板</titile>
</head>
<body>
	<h1>掲示板</h1>
	<form action="">
		message:<input type="text">
	</form>
	<h2>投稿一覧(0件)</h2>
	<?php

	?>
</body>
</html>