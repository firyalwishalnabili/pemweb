<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete</title>
</head>
<body style="background-color: lightgreen;">
  <h3 align="center">DELETE DATA BUS</h3>
  <form action="" method="post">
    <table align="center" bgcolor="lime"  width="35%">
    <tr>
      <td>Masukkan ID yang akan dihapus : </td><br>
      <td><input type="number" name="id_kondektur" size="12"></td>
    </tr>
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
  if (isset($_POST["save"])){
    $id_bus = $_POST['id_bus'];

    $query = "DELETE FROM bus WHERE id_bus = :id_bus";
    $a = $koneksi->prepare($query);
    $a->bindParam(':id_bus', $id_bus);

    if($a->execute())
    {
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