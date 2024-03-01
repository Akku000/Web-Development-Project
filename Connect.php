<?php
$servername = "localhost";
$username = "username";
$password = "password";


// connecting sqlite databse using PDO 
try {
  $conn = new PDO("sqlite:host=$servername;dbname=DBEvent.db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// WRITE SQL
$statement = $conn->query("SELECT * FROM CUSTOMERS");

// RUN THE SQL
$data = $statement->fetchAll(PDO::FETCH_ASSOC);

echo $data;

  
?> 