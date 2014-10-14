<?php
//XXXXあとで何とか直す

//シングルトンパターン

//PDOの変わり
class pdo_dummy{
}

//DBハンドルクラス
class db_handle{
	private function __construct(){
	}
	static public function get_instance(){
		//
		static $obj = NULL;
		if($obj === NULL){
		$obj = new pdo_dummy();	
		}
		return $obj;
	}
	public function get_dbh(){
		return $this->dbh_;
	}
	private $dbh_;
}

//「なにか」をやるクラス
class hoge{
	public function bar(){
		var_dump(db_handle::get_dbh());
	}
}

$obj1 = new hoge();
$obj1->bar();