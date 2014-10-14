<?php

function hoge(){
	$i = 0;
	$i ++;

	static $j = 0;
	$j ++;

	echo 'i は' . $i . "で\n";
	echo 'j は' . $j . "です。<br>";
}
hoge();
hoge();
hoge();