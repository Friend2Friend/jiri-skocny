<?php

ob_start();
session_start(); 

$servername = 'localhost';
$dbname     = 'webapp';
$username   = 'root';
$password   = '1234';

$dsn = 'mysql:host='.$servername.';dbname='.$dbname;

try {
  $conn = new PDO($dsn, $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "No connecttion: ".$e->getMessage();
}