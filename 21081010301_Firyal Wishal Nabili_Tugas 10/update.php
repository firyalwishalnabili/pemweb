<!DOCTYPE html>
<html>
  <head>
    <title>Update</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h2>Update Data Buku</h2>
    <form action="" method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td>Kode Buku</td>
          <td><input type="number" value="<?= $data['0'] ?>" name="kodeBuku" required="required"></td>
        </tr>
        <tr>
          <td>Judul</td>
          <td><input type="text" value="<?= $data['1'] ?>" name="judul" required="required"></td>
        </tr>
        <tr>
          <td>Pengarang</td>
          <td><input type="text" value="<?= $data['2'] ?>" name="pengarang" required="required"></td>
        </tr>
        <tr>
          <td>Tahun terbit</td>
          <td><input type="number" value="<?= $data['4'] ?>" name="tahunTerbit" required="required"></td>
        </tr>
        <tr>
          <td>Jumlah Halaman</td>
          <td><input type="number" value="<?= $data['5'] ?>" name="jumlahHalaman" required="required"></td>
        </tr>
        <tr>
          <td>Penerbit</td>
          <td><input type="text" value="<?= $data['3'] ?>" name="penerbit" required="required"></td>
        </tr>
        <tr>
          <td>Kategori</td>
          <td><input type="text" value="<?= $data['6'] ?>" name="kategori" required="required"></td>
        </tr>
        <tr>
          <td>Cover</td>
          <td><img src="upload/<?php echo $data['7'] ?>" height="200px" alt="">
          <td><input type="file" value="cover" name="cover"></td></td>
        </tr>
        <tr>
          <td><input type="hidden" name="data_input" value="<?= $_GET['data_input'] ?>"></td>
          <td><button type="submit" class="btn btn-primary">Simpan</button></td>
        </tr>
      </table>
    </form>
    <?php
      if ($_SERVER['REQUEST_METHOD'] === 'GET') {
          if(isset($_GET['data_input'])) {
            $filetemp = file('data.txt');
            foreach($filetemp as $data_input){
              if ($data_input == $_GET['data_input']."\n") {
                $data = explode("-", $data_input);
                break;
              }
            }
          }
      }
      //misahin -
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if(isset($_POST['data_input'])) {
            $filetemp = file('data.txt');
            foreach($filetemp as $data_input){
              if ($data_input == $_POST['data_input']."\n") {
                $data = explode("-", $data_input);
                if(isset($_FILES["cover"]) && !empty($_FILES["cover"]["name"])){
                  unlink("upload/" . str_replace(array("\r", "\n", "\r\n"), '', $data['7']));
                  if((($_FILES["cover"]["type"] == "image/gif") || ($_FILES["cover"]["type"] == "image/jpeg") || ($_FILES["cover"]["type"] == "image/png") || ($_FILES["cover"]["type"] == "image/jpg") || ($_FILES["cover"]["type"] == "image/JPG") || ($_FILES["cover"]["type"] == "image/pjpeg"))) {
                    if($_FILES["cover"]["error"] > 0) {
                      $status = "Gagal ! Return Code: " . $_FILES["cover"]["error"];
                    }else {
                      if(file_exists("upload/" . $_FILES["cover"]["name"])) {
                        unlink("upload/" . $_FILES["cover"]["name"]);
                        move_uploaded_file($_FILES["cover"]["tmp_name"], "upload/" . $_FILES["cover"]["name"]);
                        $location = "upload/" . $_FILES["cover"]["name"];
                      }
                      else {
                        move_uploaded_file($_FILES["cover"]["tmp_name"], "upload/" . $_FILES["cover"]["name"]);
                        $location = "upload/" . $_FILES["cover"]["name"];
                      }
                      $dataUpdate = $_POST['kodeBuku'] . "-" . $_POST['judul'] . "-" . $_POST['pengarang'] . "-" . $_POST['tahunTerbit'] . "-" . $_POST['jumlahHalaman'] . "-" . $_POST['penerbit'] . "-" . $_POST['kategori'] . "-" . $_FILES['cover']['name'] . "\n";
                    }
                  } else {
                    $status = 'Gagal';
                  }
                }else{
                  $dataUpdate = $_POST['kodeBuku'] . "-" . $_POST['judul'] . "-" . $_POST['pengarang'] . "-" . $_POST['tahunTerbit'] . "-" . $_POST['jumlahHalaman'] . "-" . $_POST['penerbit'] . "-" . $_POST['kategori'] . "-" . $data['7'];
                }
                echo $dataUpdate;
                $edit = file_get_contents('data.txt');
                $edit = str_replace($_POST['data_input']."\n", $dataUpdate, $edit);
                try{
                  file_put_contents('data.txt', $edit);
                  $status = 'ok';
                }catch(Exception $e){
                  $status = $e->getMessage();
                }
              }
            }
          }
      }
      
      ?>
    <table>
    <tr><td><a href="read.php">Kembali</a></td></tr>
    </table>
    <table>
      <tr>
        <td>Perubahan Terakhir : </td>
        <td>
          <?php
          if (@$_GET['status']!==NULL) {
            $status = $_GET['status'];
            if ($status=='ok') {
              echo 'Data berhasil disimpan';
            }
            else{
              echo 'Data tidak berhasil disimpan';
            }

          }
        ?>
        </td>
      </tr>
    </table>

  </body>
</html>