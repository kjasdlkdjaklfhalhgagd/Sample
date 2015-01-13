<?php
// db_handle.php
/*
// 使い方想定
$dbh = db_handle::get_instance()->get_dbh();
*/
//
require_once('config.php');

class db_handle {
  // singletonなのでコンストラクタはつぶす
  private function __construct() {
  }

  //
  static public function get_instance() {
    static $obj = NULL;
    if (NULL === $obj) {
      $obj = new db_handle();
      //
      $db_name = config::get('db_name');
      $user    = config::get('db_user');
      $pass    = config::get('db_pass');
      $host    = config::get('db_host');
      $dsn = "mysql:dbname={$db_name};host={$host}";
      //
      try {
        $obj->dbh_ = new PDO($dsn, $user, $pass);
        // 静的プレースホルダを指定
        $obj->dbh_->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      } catch (PDOException $e) {
        echo "エラーだよ？<br>";
        echo $e->getMessage();
        return ;
      }
    }
    //
    return $obj;
  }
  //
  public function get_dbh() {
    return $this->dbh_;
  }

private $dbh_;
}
/*
//テスト
var_dump( db_handle::get_instance()->get_dbh() );
var_dump( db_handle::get_instance()->get_dbh() );
var_dump( db_handle::get_instance()->get_dbh() );
*/