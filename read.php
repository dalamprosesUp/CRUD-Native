<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Users</title>
</head>
<body>
    
    <h1>Data Users</h1>

    <a href="create.php">Tambah User</a>
    <br>
    <br>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        <?php
            $data = mysqli_query($koneksi, "SELECT * FROM users ORDER BY id DESC");
            while($user = mysqli_fetch_array($data)){
        ?>

        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['nama'] ?></td>
            <td><?php echo $user['alamat'] ?></td>
            <td><a href="delete.php?id=<?php echo $user['id'] ?>">Delete</a></td>
        </tr>

        <?php
        }
        ?>
        


    </table>
</body>
</html>