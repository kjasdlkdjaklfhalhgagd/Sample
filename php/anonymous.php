<?php

//無名関数とは変数の中に関数を代入すること
$ano = function(&$s){
	for($i = 0; $i <= 10; $i++){
		echo ($s+=$i)."<br>";
	}
};

$num = 2;
$ano($num);
