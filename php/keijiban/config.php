<?php
//config.php
class config {
  static public function get($data) {
    return self::$data_list[$data];
  }

private static $data_list = array (
    // DB
    'db_name' => 'keijiban',
    'db_user' => 'root',
    'db_pass' => '',
    'db_host' => 'localhost'
  );
}