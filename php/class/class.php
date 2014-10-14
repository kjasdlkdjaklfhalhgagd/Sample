<?php
class item{
	public $item;
	function set_item($title){
		this->$item = $title;
	}
}

$obj = new item();
$obj->set_item("book1");
var_dump($obj);