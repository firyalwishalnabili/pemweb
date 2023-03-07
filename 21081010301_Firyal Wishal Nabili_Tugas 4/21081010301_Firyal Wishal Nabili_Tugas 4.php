<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body style="background-color: pink;">
    <?php $nama = "Firyal Wishal Nabili"; ?>
    <?php $npm = "21081010301"; ?>
    <?php $kebangsaan = "Indonesia"; ?>
    <?php $tanggal_lahir = "2003-04-04"; ?>
    <?php $alamat = "Lamongan"; ?>
    <?php $gender = "Laki-laki";?>
    <?php $mbti = "ENTP"; ?>
    <?php $text1 = 'Firyal lahir pada 4 April 2003 di TulungAgung, Jawa Timur, Indonesia.'; ?>
    <?php $text2 = 'Saat ini dia menempuh pendidikan Di Universitas Pembangunan Nasional "Veteran" Jawa Timur mulai tahun 2021 mengambil jurusan Informatika.' ; ?>
    <?php $text3 = 'Dia mengikuti UKM E-Sport Cabang Mobile Legend : Bang Bang.'; ?>
    <?php $text4 = 'Sebelumnya dia menempuh Bangku SMA di SMA Muhammdaiyah 9 Brondong-Lamongan.'; ?>
    <?php $text5 = 'Dia anak pertama dan memiliki 2 adik perempuan. Dia biasa dipanggil dengan nama pendek "Firyal".'; ?>
    <?php $email = "firyalnabili@gmail.com"; ?>
    <?php $handphone = "(+62)89508752775"; ?>
    <?php $hobi1 = "Bermain game"; ?>
    <?php $hobi2 = "Membaca"; ?>
    <?php $hobi3 = "Rebahan"; ?>
    <div style="width: 650px;
        height: 70px;
        position: absolute;
        margin-left: 400px;
        border-radius: 30px;
        font-size: 60px;
        text-allign: center;
        ">
        <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">BIODATA</p>
    </div>
    <div style="width: 650px;
        height: 330px;
        background-color: white;
        position: absolute;
        top: 130px;
        margin-left: 400px;
        border-radius: 30px;
        font-size: medium;
        ">
         <div style="position: absolute; top: 12%; margin-left: 70px;">
            <img src="foto.png" width="180px" height="240px" style="float:left; border-radius: 30px;" />
        </div>
         <div style="position: absolute; top: 3%; margin-left: 300px;">
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "Nama : $nama";?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "NPM : $npm";?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "Kebangsaan : $kebangsaan ";?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;">Tanggal Lahir : <?php echo $tanggal_lahir; ?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;">Umur : <?php echo date_diff(date_create($tanggal_lahir), date_create('now'))->y; ?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "Alamat : $alamat";?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "Gender : $gender";?></h5>
            <h5 style="color: black; font-family: Arial, Helvetica, sans-serif;"><?php echo "MBTI : $mbti";?></h5>
        </div>

        <div style="width: 650px;
        height: 20px;
        position: absolute;
        top: 330px;
        border-radius: 15px;
        font-size: 14px;
        justify-content: center">
        <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px"> Tentang Firyal : </p>
        </div>

        <div style="width: 650px;
        height: 140px;
        background-color: white;
        position: absolute;
        top: 370px;
        border-radius: 30px;
        font-size: 10px;
        justify-content: center;
        ">
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$text1";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$text2";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$text3";?></p>    
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$text4";?></p>    
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$text5";?></p>
        </div>
        <div style="width: 650px;
        height: 20px;
        position: absolute;
        top: 505px;
        border-radius: 15px;
        font-size: 14px;
        justify-content: center">
        <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px"> Sosial Media : </p>
        </div>
        <div style="width: 650px;
        height: 50px;
        background-color: white;
        position: absolute;
        top: 540px;
        border-radius: 15px;
        ">
            <a href="https://instagram.com/firyalnabili" style="color: lawngreen; margin-left: 240px;"><img src="https://cdn.pixabay.com/photo/2016/08/09/17/52/instagram-1581266_960_720.jpg" width="50px" height="50px" alt="@firyalnabili"></a> 
            <a href="https://www.facebook.com/firyal11" style="color: lawngreen;"><img src="http://fh.unwir.ac.id/wp-content/uploads/2018/03/png-facebook-logo-512x512-pixel-512.png" width="45px" height="45px" alt="firyalnabili"></a>    
            <a href="https://github.com/firyalwishalnabili" style="color: lawngreen;"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" width="50px" height="50px" alt="firyalwishalnabili"></a>   
        </div>
        <div style="width: 650px;
        height: 20px;
        position: absolute;
        top: 585px;
        border-radius: 15px;
        font-size: 14px;
        justify-content: center">
        <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px"> Contact : </p>
        </div>
        <div style="width: 650px;
        height: 70px;
        background-color: white;
        position: absolute;
        top: 620px;
        border-radius: 15px;
        font-size: 14px;
        justify-content : center;">
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">Email : <?php echo "$email";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">No handphone :<?php echo "$handphone";?></p>
        </div> 
        <div style="width: 650px;
        height: 20px;
        position: absolute;
        top: 685px;
        border-radius: 15px;
        font-size: 14px;
        justify-content: center">
        <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px"> Hobi : </p>
        </div>
        <div style="width: 650px;
        height: 110px;
        background-color: white;
        position: absolute;
        top: 720px;
        border-radius: 15px;
        font-size: 14px;
        justify-content : center;">
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$hobi1";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$hobi2";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;"><?php echo "$hobi3";?></p>
        </div>   
        <div style="width: 650px;
        height: 70px;
        position: absolute;
        top: 790px;
        border-radius: 15px;
        font-size: 14px;
        justify-content : center;">
        </div>   

</body>
</html>