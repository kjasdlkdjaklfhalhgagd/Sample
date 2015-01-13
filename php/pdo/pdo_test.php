<?php

$db_name = 'test';
$user = 'root';
$pass = 'root';
$host = 'localhost';
$dsn = "mysql:dbname={$db_name};host={$host};";


try{
	//dbに接続
	$dbh = new PDO($dsn, $user, $pass);
	echo 'アクセス完了<br>';
}catch (PDOException $e){
    echo "エラーだよ?<br>";
	echo $e->getMessage();
    return ;
}

var_dump($dbh);

class db_handle{
	//シングルトンパターン
	//コンストラクタを潰す
	private function __construct(){
	}

	//
	static public function get_instance(){
		static $obj === NULL;
		if($obj === NULL){
			$obj = new db_handle();
			
		}
	}
}