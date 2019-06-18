<?php
function db_connect($host,$user,$pass,$db) {

$mysqli = new mysqli($host, $user, $pass, $db);

$mysqli->set_charset("utf8");

if($mysqli->connect_error) 
  die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());

return $mysqli;
}

$mysqli = db_connect('localhost','root','','myschool');
