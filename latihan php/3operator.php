<?php 
    $title = "Latihan 3 (operator)";
    // variable
    $a = 7;
    $b = 3;

    // operator
    $penjumlahan = $a + $b;
    $pengurangan = $a - $b;
    $perkalian = $a * $b;
    $pembagian = $a / $b;
    $sisa_bagi = $a % $b;
    $pangkat = $a ** $b;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?></title>
</head>
<body>
    <h1>penjumlahan <?= $a ?> +  <?= $b ?> =  <?= $penjumlahan ?> </h1>
    <p>penjumlahan <?= $a ?> / <?= $b ?> =  <?= $pembagian ?> </p>

    <p><?php echo "hasil $a + $b = $penjumlahan"?>  </p>
    <p><?php echo 'hasil' . $a . '+' . $b . '=' .$pengurangan;?> </p>

    
</body>
</html>