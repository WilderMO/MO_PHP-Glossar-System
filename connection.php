<?php
$servername = "localhost";
$username = "maurice";
$password = "MOMO";
$dbname = "glossary";

try {
  $conn = new PDO("psql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>