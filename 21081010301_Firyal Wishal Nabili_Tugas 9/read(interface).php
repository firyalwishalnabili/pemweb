<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PEMWEB PDO</title>
</head>
<body>
    <h2 align='center'>DATA BUS</h2>
    <br>
    <table>
        <tr>
            <th>id_bus</th>
            <th>plat</th>
            <th>status</th>
        </tr>
        <?php 
        include ('koneksi.php');
        $no=1;
        $query = $koneksi->prepare("SELECT bus.id_bus, bus.plat, bus.status FROM bus");
        $query->execute();
        while ($tampil = $query->fetch(PDO::FETCH_ASSOC)) {
            echo "
            <tr>
            <td>$tampil[id_bus] </td>
            <td>$tampil[plat] </td>
            <td>$tampil[status] </td>
            </tr>";
            $no++;
        }
        ?>
    </table>
    <br><br>
    <h2 align="center">MENU DATA</h2>
    <br>
    <table align="center" bgcolor="white"   > 
        <td align="center"><a href="insert.php">insert data</a></td>
        <td bgcolor="lightgreen"></td> 
        <td align="center"><a href="update.php">update data</a></td>
        <td bgcolor="lightgreen"></td>
        <td align="center"><a href="delete.php">delete data</a></td>
        </tr>
    </table>
    <br><br>
</body>
</html>