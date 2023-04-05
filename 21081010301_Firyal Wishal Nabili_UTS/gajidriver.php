<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Kondektur</title>
</head>
<body style="background-color: lightgreen;">
    <center><h2>GAJI DRIVER</h2></center>
    <center><form action="" method="post">
        <table style="background-color: white;">
            <tr><label for="km">Jarak per km :</label><input type="number" name="km" id="km"></tr>
            <br>
            <tr><form method="POST">
                <label for="bulan">Bulan :</label>
                    <select name="bulan" id="bulan">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </form>
                    <button type="submit" name="submit";>
                        submit
                    </button>
                </tr>
        </table>
    </form></center>
    <?php 
    if (isset($_POST["submit"])){
        $tarif_gaji = 9000;
        $bulan = $_POST['bulan'];
        $total = $_POST['km']*$tarif_gaji;

        echo "<br>Total gaji pada bulan $bulan adalah Rp.".number_format($total,0,",",".");
    }


?>

</body>
</html>