<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data Bus</title>
</head>
<body style="background-color: lightgreen;">
<?php include "koneksi.php";
?>
  <h3 align="center">INSERT DATA BUS</h3>
  <form action="" method="post">
    <table align="center" bgcolor="lime"  width="35%">
      <tr>
        <td>ID BUS</td><br>
        <td><input type="number" name="id_bus" size="12"></td>
      </tr>
      <tr>
        <td>PLAT</td><br>
        <td><input type="text" name="plat" size="12"></td>
      </tr>
      <tr>
        <td>Status</td><br>
        <td><input type="number" name="id_bus" size="12"></td>
      </tr>
  </table>
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
  if (isset($_POST['save'])){

    $simpan = mysqli_query($koneksi, "INSERT into bus set 
    id_bus = '$_POST[id_bus]',
    nama = '$_POST[nama]',
    status = '$_POST[status]';");
    
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