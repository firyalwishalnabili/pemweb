<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMPIL KONDEKTUR</title>
</head>
<body style="background-color: lightgreen;">
<center><h3>DATA KONDEKTUR</h3></center>
  <table border="1" align="center" >
  <tr style="background-color: lime;">
    <th>ID KONDEKTUR</th>
    <th>NAMA</th>
  </tr>
  <tr>
    <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "Select * From kondektur");
      while ($data = mysqli_fetch_array($query)){
    ?>
    <td style="background-color: white">
      <?php echo $data['id_kondektur']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['nama']; ?></td>
  </tr>
  <?php
    }
  ?>
</table>
</body>
</html>