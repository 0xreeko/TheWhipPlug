<?php
// $conn = new PDO('mysql:dbname=whipplug;host=127.0.0.1', 'root', '', [PDO::ATTR_ERRMODE =>  PDO::ERRMODE_EXCEPTION ]);

$host = "localhost";
$user="root";
$pw="";
$db = "whipplug";

$conn = mysqli_connect($host,$user,$pw, $db);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

