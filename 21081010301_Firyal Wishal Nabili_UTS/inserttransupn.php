<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Driver</title>
</head>
<body style="background-color: lightgreen;">
  <center><h3 style="color: white">INSERT DATA TRANS UPN</h3></center>
  <form action="" method="post">
    <table align="center" bgcolor="lime"  width="35%">
    <tr>
      <td>ID KONDEKTUR : </td><br>
      <td><input type="text" name="id_kondektur" size="25"></td>
    </tr>
    <tr>
      <td>ID BUS: </td><br>
      <td><input type="text" name="id_bus" size="25"></td>
    </tr>
    <tr>
      <td>ID DRIVER : </td><br>
      <td><input type="text" name="id_driver" size="25"></td>
    </tr>
    <tr>
      <td>JUMLAH KM : </td><br>
      <td><input type="text" name="jumlah_km" size="25"></td>
    </tr>
    <tr>
      <td>TANGGAL: </td><br>
      <td><input type="date" name="tanggal" size="25"></td>
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
    $simpan = mysqli_query($koneksi, "INSERT into driver set id_trans_upn = '$_POST[id_trans_upn]', id_kondektur = '$_POST[id_kondektur]', id_bus = '$_POST[id_bus]', id_driver = '$_POST[id_driver]', jumlah_km = '$_POST[jumlah_km]',tanggal = '$_POST[tanggal]';");
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