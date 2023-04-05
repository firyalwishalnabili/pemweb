<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMPIL BUS</title>
</head>
<body style="background-color: lightgreen;">
  <div align="center">
        <form method="post">
            <label for="status">Filter status Bus</label>
            <select name="status" id="status">
                <option value="semua">semua</option>
                <option value="1">Beroprasi</option>
                <option value="2">Cadangan</option>
                <option value="0">Rusak</option>
            </select>
            <input type="submit" name="submit" value="filter">
        </form>
            <table>
                <tr style="background-color: white;">
                    <th>id_Bus</th>
                    <th>plat</th>
                    <th>status</th>
                    <th>jumlah_km</th>
                </tr>
            <?php 
            include ('koneksi.php');
            $i=1;
            if(isset($_POST['submit'])){
                $status = $_POST['status'];
                if($status == "semua"){
                    $query = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
                } else {
                    $query = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus WHERE bus.status = '$status'");
                }
            } else {
                $query = mysqli_query($koneksi,"SELECT trans_upn.jumlah_km, bus.id_bus, bus.plat, bus.status FROM trans_upn JOIN bus ON id_trans_upn = bus.id_bus");
            }
           while ($data = mysqli_fetch_array($query)){
              if ($data['status'] == '1') {
                  $warna = 'lightgreen'; $teks = 'BUS BEROPERASI / AKTIF';
              } elseif ($data['status'] == '2') {
                  $warna = 'yellow'; $teks = 'BUS CADANGAN';
              } else {
                  $warna = 'red'; $teks = 'BUS DALAM PERBAIKAN/RUSAK';
              }
                echo "
                <tr>
                  <td style='background-color: white;'>".$data['id_bus']."</td>
                  <td style='background-color: white;'>".$data['plat']."</td>
                  <td style='background-color: $warna;'>".$teks."</td>
                  <td style='background-color: white;'>".$data['jumlah_km']."</td>
                </tr> ";
                $i++;
            }
            ?>
        </table>
        <table align="center" bgcolor="white"  width="10%">
        <tr>
          <br><br>
          <td><input type="button" name="back" value="Back to main" onclick="self.history.back()"></td>
        </tr>
      </table>
    </div>
</table>
</body>
</html>