<?php
$omikuzi = array('小吉','大吉', '末吉','凶', '大凶');

$result = $omikuzi[mt_rand(0, count($omikuzi) - 1)];

?>

今日の運勢は「<?php echo $result; ?>」です。<br>

<a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一回引く</a>