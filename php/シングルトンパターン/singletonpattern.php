<?php

//シングルトンパターン

//PDOの変わり
class pdo_dummy{
}

//DBハンドルクラス
class db_handle{
	public function __construct(){
		$this->dbh_ = new pdo_dummy();
	}

	public function get_dbh(){
		return $this->dbh_;
	}
	private $dbh;
}

//「なにか」をやるクラス
class hoge{
	public function bar(){
		$db = new db_handle();
		var_dump($db->get_dbh());
	}
}

$obj1 = new hoge();
$obj1->bar();