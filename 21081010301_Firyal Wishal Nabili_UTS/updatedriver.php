<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Customer</title>
</head>
<body style="background-color: lightgreen;">
  <h3 align="center">UPDATE DATA DRIVER</h3>
  <form action="" method="post">
    <table align="center" bgcolor="lime"  width="35%">
    <tr>
      <td>Masukkan ID yang akan diganti : </td><br>
      <td><input type="number" name="id_kondektur" size="12"></td>
    </tr>
    </table>
    <center><h3>MASUKKAN DATA BARU</h3></center>
    <table align="center" bgcolor="lime">
    <tr>
      <td>NAMA : </td><br>
      <td><input type="text" name="nama" size="25"></td>
    </tr>
    <tr>
      <td>NO SIM: </td><br>
      <td><input type="text" name="no_sim" size="25"></td>
    </tr>
    <tr>
      <td>ALAMAT : </td><br>
      <td><input type="text" name="alamat" size="25"></td>
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
    $simpan = mysqli_query($koneksi, "UPDATE kondektur set  
    nama = '$_POST[nama]',
    no_sim= '$_POST[no_sim]',
    alamat = '$_POST[alamat]' where id_driver = '$_POST[id_driver]';");
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