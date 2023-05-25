<!DOCTYPE html>
<html>
  <head>
    <title>Buku Perpustakaan</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <h1>Data Buku Perpustakaan</h1>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman</th>
            <th>Kategori</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $filetemp = file('buku.txt');
            $no = 1;
            ?>

            <?php foreach($filetemp as $data_input){ 
            $data = explode('-', $data_input);
            ?>
            <tr>
              <td><?php echo $no;  ?></td>
              <td><?php echo $data['0'];  ?></td>
              <td><?php echo $data['1'];  ?></td>
              <td><?php echo $data['2'];  ?></td>
              <td><?php echo $data['3'];  ?></td>
              <td><?php echo $data['4'];  ?></td>
              <td><?php echo $data['5'];  ?></td>
              <td><?php echo $data['6'];  ?></td>
              <td><img src="upload/<?php echo $data['7'] ?>" height="200px" alt=""></td>
              <td>
                <a href="update.php"> Update</a>
                &nbsp;&nbsp;
                <a href="delete.php"> Delete</a>
              </td>
            </tr>
            <?php $no++; } ?>
        </tbody>
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
