<?php  
if (isset ($_POST ['submit'])) {
    $nama = $_POST['nama'];
    $matematika = $_POST['matematika'];
    $fisika = $_POST['fisika'];
    $kimia = $_POST['kimia'];
    $biologi = $_POST['biologi'];

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
</head>
<body>
    <h2>Data Registrasi</h2>
    <table border="3" cellpadding="5" cellspacing="2">
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['nama']; ?></td>
        </tr>
        <tr>
        <td>Matematika</td>
            <td><?php 
            if ($matematika >= 70 ) {
                echo "$matematika (LULUS)";
            }
            else {
                echo "$matematika (Tidak lulus)";
            }
            ?></td>

        </tr>
        <tr>
            <td>fisika</td>
            <td><?php 
            if ($fisika >= 70 ) {
                echo "$fisika (LULUS)";
            }
            else {
                echo "$fisika (Tidak lulus)";
            }
            ?></td>
        </tr>
        <tr>
            <td>kimia</td>
            <td><?php 
            if ($kimia >= 70 ) {
                echo "$kimia (LULUS)";
            }
            else {
                echo "$kimia (Tidak lulus)";
            }
            ?></td>
        </tr>
        <tr>
            <td>biologi</td>
            <td><?php 
            if ($biologi >= 70 ) {
                echo "$biologi(LULUS)";
            }
            else {
                echo "$biologi (Tidak lulus)";
            }
            ?></td>
        </tr>
        <tr>
            <td>Rata rata</td>
            <td>
                <?php
                $jumlah = $matematika + $fisika + $kimia + $biologi;
                $jumlahvariabel = 4;
                $ratarata = $jumlah / $jumlahvariabel;
                
                echo $ratarata;
                ?>

            </td>
        </tr>
        <tr>
            <td>Predikat Akhir</td>
            <td>
                <?php 
                    if ($ratarata >= 90 ) {
                        echo "Sangat Baik";
                    }    

                    elseif ($ratarata >= 75) {
                        echo "Baik";
                    }

                    else {
                        echo "Perlu Perbaikan";
                    }
                ?>
            </td>
        </tr>
    </table>
    <br>
    <a href="tugasP7form.php">Back To Home</a>
</body>
</html>