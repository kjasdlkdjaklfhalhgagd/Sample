<?php

class config{
	static public function get($name) {
		return self::$data_[$name];
	}
	private static $data_ = array(
		'db_name' 	     => 'shop_ec',
		'db_user_name'	 => 'root',
		'db_pass' => '',
		'db_host' => 'localhost'
		);
}

//var_dump( config::get('db_name')  );
//var_dump( config::get('db_user_name')  );