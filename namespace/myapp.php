<?php
require_once("proj_1.php");
require_once("proj_2.php");

$obj_1 = new \proj_1\Naming();
$obj_2 = new \proj_2\Naming();

echo $obj_1->getName()."\n";
echo $obj_2->getName()."\n";
?>
