<?php
  $host="localhost";
  $user="root";
  $pass="";
  $database="transupn";

  $koneksi = mysqli_connect($host, $user, $pass);
  if ($koneksi){
    $buka=mysqli_select_db($koneksi, $database);
  }
  else
  {
    echo "TIDAK TERHUBUNG KE DATABASE";
  }
?>