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
    <th>ID Bus</th>
    <th>Plat Bus</th>
    <th>Status Bus</th>
  </tr>
  <?php
      include "koneksi.php";
      $query = mysqli_query ($koneksi, "Select * From bus");
      while ($data = mysqli_fetch_array($query)){
        if ($data['status'] == '1') {
            $warna = 'lightgreen'; $teks = 'BUS BEROPERASI / AKTIF';
        } elseif ($data['status'] == '2') {
            $warna = 'yellow'; $teks = 'BUS CADANGAN';
        } else {
            $warna = 'red'; $teks = 'BUS DALAM PERBAIKAN/RUSAK';
        }
    ?>
    
  <?php echo"
  <tr>
    <td style='background-color: white;'>".$data['id_bus']."</td>
    <td style='background-color: white;'>".$data['plat']."</td>
    <td style='background-color: $warna;'>".$teks."</td>
  </tr> "; ?>

  <?php
    }
  ?>
    <table align="center" bgcolor="white"  width="10%">
      <tr>
        <br><br>
        <td><a href="filter.php">FILTER</a></td>
        <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
      </tr>
    </table>
  </table>
</body>
</html>