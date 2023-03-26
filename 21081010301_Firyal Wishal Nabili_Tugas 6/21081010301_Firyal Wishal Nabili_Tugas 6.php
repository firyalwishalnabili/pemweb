<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body style="background-color: pink;">
    <?php $biodata = ["Nama : Firyal Wishal Nabili", "NPM : 21081010301", "Kebangsaan : Indonesia","Alamat : Lamongan", "Kelamin : Laki-laki", "MBTI : ENTP", "firyalnabili@gmail.com", "(+62)89508752775", "Bermain game", "Membaca", "Rebahan"]; ?>
    <?php $text = ['Firyal lahir pada 4 April 2003 di TulungAgung, Jawa Timur, Indonesia.', 'Saat ini dia menempuh pendidikan Di Universitas Pembangunan Nasional "Veteran" Jawa Timur mulai tahun 2021 mengambil jurusan Informatika.', 'Dia mengikuti UKM E-Sport Cabang Mobile Legend : Bang Bang.', 'Sebelumnya dia menempuh Bangku SMA di SMA Muhammdaiyah 9 Brondong-Lamongan.', 'Dia anak pertama dan memiliki 2 adik perempuan. Dia biasa dipanggil dengan nama pendek "Firyal".']; ?>
    <?php $tanggal_lahir = "2003-04-04"; ?>
    <div style="width: 650px;
        height: 70px;
        position: absolute;
        margin-left: 400px;
        border-radius: 30px;
        font-size: 60px;
        text-align: center;
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
         <div style="position: absolute; top: 3%; margin-left: 300px; font-size: 15px; font-family: Arial, Helvetica, sans-serif; font-weight: bold;">
         <?php
            echo "<br><br>";
                for($i=0; $i < 6; $i++)
                {
                    
                    echo $biodata[$i]."<br> <br>";
                }
            echo 'Umur : ';
                echo date_diff(date_create($tanggal_lahir), date_create('now'))->y;
        ?>
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
            <?php
                for($i=0; $i < count($text); $i++)
                {
                    echo '<p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">';
                    echo $text[$i]."<br> </p>";
                }
            ?>
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
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">Email : <?php echo "$biodata[6]";?></p>
            <p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">No handphone :<?php echo "$biodata[7]";?></p>
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
        <?php
                for($i=8; $i < count($biodata); $i++)
                {
                    echo '<p style="font-weight: bold; font-family: Arial, Helvetica, sans-serif; margin-left: 20px;">';
                    echo $biodata[$i]."<br> </p>";
                }
        ?>
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