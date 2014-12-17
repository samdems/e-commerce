<?php
include 'config.php';
include 'db.php';


 $reqestAray = explode("/", $_SERVER['REQUEST_URI']);
 $reqestDir =  explode("?" , $reqestAray[count($reqestAray)-1])[0];
 echo $reqestDir ;
?>
