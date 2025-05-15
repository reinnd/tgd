<?php

include "conn.php";

$query = $conn->query("SELECT * FROM tamu");
$result = $query->fetch_all(MYSQLI_ASSOC);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<body>
    <a href="form.php">Tambah Data</a>
    <table border="1">
        <thead>
            <tr>

                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>aksi</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($result as $data) :   ?>
                
                <tr>
                    <td><?= $data['IDtamu']; ?></td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['email'];?></td>
                    <td><?= $data['phone'];?></td>
                    <td>
                        <button>edit</button>
                        <a href="hapus.php?id= <?=$data['IDtamu']?> ">Hapus</a>
                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>