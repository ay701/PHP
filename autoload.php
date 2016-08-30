<?php
// This is about how to use __autoload magic method to load classes
// Or use spl_autoload_register function to register autoload function

function __autoload($class_name){
  require_once "classes/".$class_name.".php";
}

$obj_a = new A("nameA");
$obj_b = new B("nameB");
$obj_c = new C("nameC");

echo $obj_a->name."\n";
echo $obj_b->name."\n";
echo $obj_c->name."\n";
