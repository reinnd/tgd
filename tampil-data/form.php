<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form action="tambah.php" method="post">

        <label for="IDtamu"></label><br>
        <input type="number" name="IDtamu" hidden><br>

        <label for="nama">Nama</label><br>
        <input type="text" name="nama"><br>

        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="telp">No Telp</label><br>
        <input type="text" name="telp"><br><br>

        <input type="submit" value="kirim">

    </form>
</body>
</html>