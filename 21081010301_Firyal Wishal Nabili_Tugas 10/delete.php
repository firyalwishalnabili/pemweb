<?php 
  include ('conn.php'); 

  $status = '';
  $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['data_input'])) {
          $filetemp = file('buku.txt');
          foreach($filetemp as $data_input){
            if ($data_input == $_GET['data_input']."\n") {
                $data = explode("-", $data_input);
                unlink("upload/" . str_replace(array("\r", "\n", "\r\n"), '', $data['7']));
                $edit = file_get_contents('buku.txt');
                $edit = str_replace($_GET['data_input']."\n", "", $edit);
                try{
                  file_put_contents('data.txt', $edit);
                  $status = 'ok';
                }catch(Exception $err){
                  $status = $err->getMessage();
                }
              }
          }
      }  
  }
  ?>
  <table>
    <tr><td><a href="read.php">Kembali</a></td></tr>
  </table>