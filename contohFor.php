<html>
<head>
    <title> perulangan FOR </title>
</head>
<body>
    nilai awal angka =1 
    <br><br>
    <?php
    for($angka = 1;$angka<=10;$angka++)
    {
        if ($angka % 2 != 0) {
            echo "Angka: " . $angka . "<br>";
        }
    }
    ?>
</body>
</html>
<br><br>