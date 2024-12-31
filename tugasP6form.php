<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Looping - Latar Belakang Gelap</title>
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
        .input-section {
            background: rgba(0, 0, 0, 0.1); /* Latar belakang agak gelap */
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahan bayangan */
            margin-bottom: 20px;
        }
        h1, h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        .separator {
            margin: 20px 0;
            border-top: 1px solid #ccc;
        }
        .result-container {
            max-width: 600px;
            margin: 20px auto;
            background: #1c1e26;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            text-align: left;
        }
        .result-container h2 {
            color: #61dafb;
            margin-bottom: 15px;
        }
        .result-container ul {
            list-style: none;
            padding: 0;
        }
        .result-container li {
            margin-bottom: 10px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #61dafb;
            color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        a:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Masukkan Jumlah Data</h1>
    <div class="container">
        <form action="" method="post">
            <!-- Input Jumlah Data -->
            <div class="form-group">
                <label for="jumlah_data">Masukkan jumlah data</label>
                <input type="number" id="jumlah_data" name="jumlah_data" min="1" value="<?= isset($_POST['jumlah_data']) ? $_POST['jumlah_data'] : '' ?>" required>
            </div>
            <button type="submit">Set Jumlah Data</button>
            
            <div class="separator"></div>

            <!-- Input Data Berdasarkan Jumlah -->
            <?php
            if (isset($_POST['jumlah_data']) && $_POST['jumlah_data'] > 0) {
                $jumlah_data = (int)$_POST['jumlah_data'];
            ?>
                <div class="input-section">
                    <h2>Masukkan Data</h2>
                    <?php for ($i = 1; $i <= $jumlah_data; $i++) { ?>
                        <div class="form-group">
                            <label for="nim<?= $i ?>">Data Ke-<?= $i ?>: Input NIM</label>
                            <input type="text" id="nim<?= $i ?>" name="data[<?= $i ?>][nim]" required>
                        </div>
                        <div class="form-group">
                            <label for="nama<?= $i ?>">Input Nama</label>
                            <input type="text" id="nama<?= $i ?>" name="data[<?= $i ?>][nama]" required>
                        </div>
                    <?php } ?>
                    <button type="submit">Simpan</button>
                </div>
            <?php
            }
            ?>

            <!-- Menampilkan Data -->
            <?php
            if (isset($_POST['data'])) {
                $data = $_POST['data'];
            ?>
                <div class="separator"></div>
                <div class="result-container">
                    <h2>Data yang Dimasukkan</h2>
                    <ul>
                        <?php foreach ($data as $index => $item) { ?>
                            <li>
                                <strong>Data Ke-<?= $index ?>:</strong><br>
                                NIM: <?= htmlspecialchars($item['nim']) ?><br>
                                Nama: <?= htmlspecialchars($item['nama']) ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <a href="">Reset</a>
            <?php
            }
            ?>
        </form>
    </div>
</body>
</html>
