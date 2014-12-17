<?php
include 'config.php';
include 'db.php';
$data = new DB();

$reqestAray = explode("/", $_SERVER['REQUEST_URI']);
$dbTable =  explode("?" , $reqestAray[count($reqestAray)-1])[0];
$start = $_GET["s"];
$end   = $_GET["e"];
echo json_encode ($data->getData($start,$end , $dbTable));


?>
