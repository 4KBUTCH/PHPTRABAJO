<?php 

$host = "b360fhwg4d0o5qihnanl-mysql.services.clever-cloud.com";
$user = "u5q0vhcjp4pjw5bi";
$pass = "mdQYJeHGkhmpj8wV2RpM";
$db   = "b360fhwg4d0o5qihnanl";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>