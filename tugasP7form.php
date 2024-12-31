<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian Multi-Mata Pelajaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .result-table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
        }
        .result-table, .result-table th, .result-table td {
            border: 1px solid black;
        }
        .result-table th, .result-table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Form Penilaian Multi-Mata Pelajaran</h2>
    <form action="tugasP7hasil.php" method="POST">
    <form id="nilaiForm">
        <label>Nama Siswa:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label><b>Masukkan Nilai Mata Pelajaran:</b></label><br><br>

        <label>Matematika:</label><br>
        <input type="number" id="matematika" name="matematika" required><br><br>

        <label>Fisika:</label><br>
        <input type="number" id="fisika" name="fisika" required><br><br>

        <label>Kimia:</label><br>
        <input type="number" id="kimia" name="kimia" required><br><br>

        <label>Biologi:</label><br>
        <input type="number" id="biologi" name="biologi" required><br><br>

        <button type="submit" name ="submit">Submit</button>
    </form>
    <script>
        function hitungNilai() {
            // Get input values
            const nama = document.getElementById("nama").value;
            const matematika = parseFloat(document.getElementById("matematika").value);
            const fisika = parseFloat(document.getElementById("fisika").value);
            const kimia = parseFloat(document.getElementById("kimia").value);
            const biologi = parseFloat(document.getElementById("biologi").value);

            // Calculate average score
            const rataRata = (matematika + fisika + kimia + biologi) / 4;

            // Determine pass/fail for each subject
            const statusMatematika = matematika >= 70 ? "Lulus" : "Tidak Lulus";
            const statusFisika = fisika >= 70 ? "Lulus" : "Tidak Lulus";
            const statusKimia = kimia >= 70 ? "Lulus" : "Tidak Lulus";
            const statusBiologi = biologi >= 70 ? "Lulus" : "Tidak Lulus";

            // Determine final grade based on average
            let predikat;
            if (rataRata >= 85) {
                predikat = "Sangat Baik";
            } else if (rataRata >= 75) {
                predikat = "Baik";
            } else if (rataRata >= 65) {
                predikat = "Cukup";
            } else {
                predikat = "Kurang";
            }

            // Display results in the table
            document.getElementById("resultNama").innerText = nama;
            document.getElementById("resultMatematika").innerText = `${matematika} (${statusMatematika})`;
            document.getElementById("resultFisika").innerText = `${fisika} (${statusFisika})`;
            document.getElementById("resultKimia").innerText = `${kimia} (${statusKimia})`;
            document.getElementById("resultBiologi").innerText = `${biologi} (${statusBiologi})`;
            document.getElementById("resultRataRata").innerText = rataRata.toFixed(2);
            document.getElementById("resultPredikat").innerText = predikat;
        }
    </script>

</body>
</html>
