<html>
<head>
    <title>perulangan FOR</title>
</head>
<body>
    penggunaan pada form :
    <br>
    <?php
    echo "<form name = form1 method=post>";
    echo "tanggal";
    echo "<select name = tanggal>";
    for ($tanggal =1;$tanggal<=31;$tanggal++)
    {
        echo "<option value=".$tanggal.">".$tanggal."</option>";
    }
    echo "</select>";
    echo "</form>";
    ?>
</body>
</html>