<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #007BFF;
            color: #fff;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            color: #333;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            margin-bottom: 20px;
        }
        ul {
            text-align: left;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Hasil Data yang Dimasukkan</h1>
    <div class="container">
        <?php
        if (isset($_POST['data'])) {
            $data = $_POST['data'];
            foreach ($data as $index => $item) {
        ?>
            <p>Data Ke-<?= $index ?>:</p>
            <ul>
                <li>NIM: <?= htmlspecialchars($item['nim']) ?></li>
                <li>Nama: <?= htmlspecialchars($item['nama']) ?></li>
            </ul>
        <?php
            }
        } else {
            echo "<p>Tidak ada data yang dimasukkan!</p>";
        }
        ?>
        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
