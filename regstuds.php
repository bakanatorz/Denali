<?php
require("config.php");
$system = new system();

$ev1 = $_GET["ev1"];
$ev2 = $_GET["ev2"];
$ev3 = $_GET["ev3"];
$ev4 = $_GET["ev4"];
$id = $_GET["id"];

/*
if($system->registerStudent(34, $ev1, $ev2, $ev3, $ev4))
    echo 1;
else
    echo mysql_error();
    */

    if($system->registerStudent($id, $ev1, $ev2, $ev3, $ev4, 'NOW()'))
        echo 1;
    else 
        echo 0;


?>
