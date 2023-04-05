<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Kondektur</title>
</head>
<body style="background-color: lightgreen;">
  <center><h3 style="color: white">INSERT DATA DRIVER</h3></center>
  <form action="" method="post">
    <table align="center" bgcolor="lime"  width="35%">
    <tr>
      <td>ID KONDEKTUR</td><br>
      <td><input type="number" name="id_kondektur" size="12"></td>
    </tr>
    <tr>
      <td>NAMA</td><br>
      <td><input type="text" name="nama" size="12"></td>
    </tr>
  <table align="center" bgcolor="white"  width="10%">
    <tr>
      <br><br>
      <td><input type="submit" name="save" value="Insert"></td>
      <td><input type="reset" name="reset" value="Reset form"></td>
      <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
    </tr>
  </table>
  </form>
  <?php
  include "koneksi.php";
  if (isset($_POST['save'])){
    $simpan = mysqli_query($koneksi, "INSERT into kondektur set 
    id_kondektur = '$_POST[id_kondektur]',
    nama = '$_POST[nama]';");
    if ($simpan){
      echo "<script> alert ('Data berhasil disimpan')</script>";
      header ("refresh:0;interface.php");
    }
    else{
      echo "<script> alert ('Data tidak berhasil disimpan')</script>";
      header ("refresh:0;interface.php");
    }
  }
?>
</body>
</html>