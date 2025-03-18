<?php
$nama = "Yudi afandi ganteng";
$umur = 20;
$alamat = "Jl. Imam Bonjol";

if(isset($_POST['proses'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
}
if(isset($_POST['reset'])){
    $nama = "";
    $umur = "";
    $alamat = "";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h1>Hello $nama</h1>";
    echo "<h1>saat ini kamu berumur $umur tahun</h1>";
    echo "<h1>kamu tinggal di $alamat</h1>";

    
    
    
    ?>
    <form action="" method="post">
        Nama : <input type="text" name="nama" placeholder="nama">
        Umur : <input type="text" name="umur" placeholder="umur">
        Alamat : <input type="text" name="alamat" placeholder="alamat">
        <input type="submit" name="proses" value="simpan data">
        <input type="submit" name="reset" value="reset data">
    </form>
    
</body>
</html>