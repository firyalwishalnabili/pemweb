<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMPIL BUS</title>
</head>
<body style="background-color: green;">
  <table border="1" align="center" >
  <tr style="background-color: lime;">
    <th>ID TRANS UPN</th>
    <th>ID KONDEKTUR</th>
    <th>ID BUS</th>
    <th>ID DRIVER</th>
    <th>JUMLAH KM</th>
    <th>TANGGAL</th>
  </tr>
  <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "Select * From trans_upn");
      while ($data = mysqli_fetch_array($query)){
      ?>
    <td style="background-color: white">
      <?php echo $data['id_trans_upn']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['id_kondektur']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['id_bus']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['id_driver']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['jumlah_km']; ?></td>
    <td style="background-color: white;">
        <?php echo $data['tanggal']; ?></td>
  </tr>
  <?php
    }
  ?>
</table>
</body>
</html>