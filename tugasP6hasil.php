<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <h2>Data Registrasi</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST["nama"]);
        $alamat = htmlspecialchars($_POST["alamat"]);
        $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
        $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
        $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
        $pendidikan = htmlspecialchars($_POST["pendidikan"]);

        echo "<table border='1'>
                <tr><td>Nama</td><td>$nama</td></tr>
                <tr><td>Alamat</td><td>$alamat</td></tr>
                <tr><td>Tempat Lahir</td><td>$tempat_lahir</td></tr>
                <tr><td>Tanggal Lahir</td><td>$tanggal_lahir</td></tr>
                <tr><td>Jenis Kelamin</td><td>$jenis_kelamin</td></tr>
                <tr><td>Pendidikan</td><td>$pendidikan</td></tr>
              </table>";
    } else {
        echo "Tidak ada data yang dikirim.";
    }
    ?>
    <br><br>
    <a href="tugasP6form.php">back to home</a>
</body>
</html>
