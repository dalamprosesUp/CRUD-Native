<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
</head>
<body>

    <h1>Masukkan Data</h1>

    <form action ="proses-create.php" method="post">

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td colspant="3"><br></td>
        </tr>
        <tr>
            <td style="vertical-align: top;">Alamat</td>
            <td style="vertical-align: top;">:</td>
            <td><textarea name="alamat" cols="30" rows="30"></textarea></td>
        </tr>
        <tr>
            <td colspant="3"><br></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="simpan"</td>
        </tr>
    </table>
    </form>
</body>
</html>