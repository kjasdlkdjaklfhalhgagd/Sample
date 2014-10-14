<?php
//
/*
//使い方想定
$dbh = db_handle::get_instance()->get_dbh();
*/

require './config.php';

class db_handle{
	//singletonなのでコンストラクトはつぶす
	private function __construct(){
	}

	//
	static public function get_instance(){
		if (NUll === $obj){
			$obj = new db_handle();
			//
			$db_name = config::get('db_name');
			$user = config::get('db_user');
			$pass = config::get('db_pass');
			$host = config::get('db_host');
			$dsn = "mysql:dbname={$db_name};host={$host};";
			//
			try{
				$obj->$dbh = new PDO($dsn, $user, $pass);
				//性的プレースホルダを指定
				$obj->$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				}catch (PDOException $e){
    			echo "データベースに接続できなかったよ?<br>";
				echo $e->getMessage();
 			 	return ;
			}
		}
		//
		return $obj;
	}
	//
	public function get_dbh(){
		return $this->dbh;
	}
	private $dbh;
}

//テスト
var_dump(db_handle::get_instance()->get_dbh() );
var_dump(db_handle::get_instance()->get_dbh() );
var_dump(db_handle::get_instance()->get_dbh() );