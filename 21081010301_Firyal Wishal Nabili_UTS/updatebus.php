<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Customer</title>
</head>
<body style="background-color: lightgreen;">
  <h3 align="center">UPDATE DATA BUS</h3>
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
      <td>PLAT : </td><br>
      <td><input type="text" name="plat" size="25"></td>
    </tr>
    <tr>
      <td>STATUS: </td><br>
      <td><input type="text" name="status" size="25"></td>
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
    plat= '$_POST[plat]',
    status = '$_POST[status]' where id_bus = '$_POST[id_bus]';");
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