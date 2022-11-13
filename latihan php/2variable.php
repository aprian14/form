<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2 (variable)</title>
</head>
<body>
    



<?php
    // membuat variable
    $nama_lengkap = "mafrian"; // tipe data string 
    $nim = 12345; // tipe data integer
    $nilai = 12.3; // tipe data duoble
    $lulus = true; // tipe data boolean
    $lulus2 = "true"; // tipe data boolean (true or false)
    
?>

<h1>selamat datang, <?php echo $nama_lengkap; ?> </h1>
<p> Tipe data dari variable $nama_lengkap adalah <?php echo gettype($nama_lengkap) ?> </p>
<p>NIM : <?php echo gettype($nim) ?></p>
<p>Nilai : <?php echo $nilai ?> </p>
<p>tipe data dari variable $nilai adalah <?php echo gettype($nilai)?></p>
<p>Lulus :  <?php echo $lulus ?> </p>
<p>tipe data dari variable $lulus adalah <?php echo gettype($lulus)?></p>
<p>lulus2 :  <?php echo $lulus2 ?> </p>
<p>tipe data dari variable $lulus2 adalah <?php echo gettype($lulus2)?></p>

</body>
</html>