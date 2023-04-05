<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMPIL DRIVER</title>
</head>
<body style="background-color: lightgreen;">
<center><h3 style="color: white;">DATA DRIVER</h3></center>
  <table border="1" align="center" >
  <tr style="background-color: lime;">
    <th>ID DRIVER</th>
    <th>NAMA</th>
    <th>NO SIM</th>
    <th>ALAMAT</th>
  </tr>
  <tr>
    <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "select * from driver");
      while ($data = mysqli_fetch_array($query)){
    ?>
    <td style="background-color: white">
      <?php echo $data['id_driver']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['nama']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['no_sim']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['alamat']; ?></td>
  </tr>
  <?php
    }
  ?>
</table>
</body>
</html>