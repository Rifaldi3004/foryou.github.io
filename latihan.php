<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> masukan indentitas anda</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<pre>
isikan nama : <input type="text" name="nama">
isikan no telp : <input type="text" name="notelp">
isikan alamat : <textarea name="alamat" rows="5" cols="40"></textarea>
<input type="submit" value="TAMPIL"><input type="reset" value="BATAL">
</pre>
</form>
<?php
$nama = $_POST['nama'];
$telp = $_POST['notelp'];
$alamat = $_POST['alamat'];
if(!empty($nama)){
echo "nama : $nama <br>";}
if(!empty($telp)){
echo "No telp : $telp <br>";}
if(!empty($alamat)){
echo "alamat : $alamat <br>";}
?>
</body>
</html>