<?php
  $host="localhost";
  $user="root";
  $pass="";
  $database="transupn";

  try {
  $koneksi = new PDO("mysql:host=$host; dbname=$database", $user, $pass); 

  $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Tersambung ke database"
  }
  catch(PDOException $error)
  {
    echo "Tidak tersambung ke database: " . $error->getMessage();
  }
  
?>