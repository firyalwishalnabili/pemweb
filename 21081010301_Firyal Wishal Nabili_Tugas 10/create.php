<!DOCTYPE html>
<html>
  <head>
    <title>form</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
      <h1>Tambah Buku</h1>
      <form action="" method="POST" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Kode buku</td>
            <td><input type="number" placeholder="Masukkan Kode Buku" name="kodeBuku" required="required"></td>
          </tr>
          <tr>
            <td>Judul</td>
            <td><input type="text" placeholder="Masukkan Judul Buku" name="judul" required="required"></td>
          </tr>
          <tr>
            <td>Pengarang</td>
            <td><input type="text" placeholder="Masukkan Pengarang" name="pengarang" required="required"></td>
          </tr>
          <tr>
            <td>Tahun Terbit</td>
            <td><input type="number" placeholder="Masukkan Tahun Terbit" name="tahunTerbit" required="required"></td>
          </tr>
          <tr>
            <td>Jumlah Halaman</td>
            <td><input type="number" placeholder="Masukkan Jumlah Halaman" name="jumlahHalaman" required="required"></td>
          </tr>
          <tr>
            <td>Penerbit</td>
            <td><input type="text" placeholder="Masukkan Penerbit" name="penerbit" required="required"></td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td><input type="text" placeholder="Masukkan Kategori" name="kategori" required="required"></td>
          </tr>
          <tr>
            <td>Cover</td>
            <td><input type="file" placeholder="cover" name="cover" required="required"></td>
          </tr>
          <tr>
            <td><button type="submit" class="btn btn-primary">Simpan</button></td>
          </tr>
        </table>
      </form>
      <br><br><br>
      
      <?php 

      $status = '';
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
            $data = $_POST['kodeBuku'] . "-" . $_POST['judul'] . "-" . $_POST['pengarang'] . "-" . $_POST['tahunTerbit'] . "-" . $_POST['jumlahHalaman'] . "-" . $_POST['penerbit'] . "-" . $_POST['kategori'] . "-" . $_FILES['cover']['name'] . "\n";
            try{
              file_put_contents('buku.txt', $data, FILE_APPEND);
              $status = 'ok';
            }catch(Exception $err){
              $status = $err->getMessage();
            }
        }
        } else {
          $status = 'Gagal';
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
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  </body>
</html>