<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6 (array)</title>
</head>
<body>
    <?php
        // array => tipe data yang bisa menampung lebih dari 1 nilai
        // array ada 2 jenis
        // 1. array indexing => array memiliki index didalamnya. index array di mulai dari 0
        
        $buah = ['anggur', 'belimbing', 'mangga', 'nangka'];
        // var_dump($buah);

        // untuk mengambil nilai dari pada array, kita harus panggil indexnya 
        echo "ambil nilai buah yang : " . $buah[0] . "<br>";
        echo "ambil nilai buah yang : " . $buah[1] . "<br>";
        echo "ambil nilai buah yang : " . $buah[2] . "<br>";
        echo "ambil nilai buah yang : " . $buah[3] . "<br>";
        // 2. array associative => array yang terdiri dari key velue

        echo "<hr>";
        // menampilkan isi dari array sekaligus, menggunakan foreach 
        foreach($buah as $b){
            echo "ambil nilai buah yang : " . $b . "<br>" ;
        }

        // 2. array associative => array yang tediri dari key dan value 
        $nilai = array (
            // key => value
            'IPA' => 90,
            'IPS' => 85,
            'MTK' => 87
        );

        echo "<hr>";

        // untuk mengambil nilai dari array associative,kita panggil key.nya
        echo "ambil nilai IPA : " . $nilai['IPA'] . "<br>";
        echo "ambil nilai IPA : " . $nilai['IPS'] . "<br>";
        echo "ambil nilai IPA : " . $nilai['MTK'] . "<br>";

        
    ?>
    <?php
    // untuk menampilkan judul key dan isi valuenya, bisa menggunakan foreach 
    foreach($nilai as $key => $n) :
    ?>        
    
    <!--disini akan ditampilkan hasil dari foreach dengan kombinasi tag html-->

    <ul> 
    <li><?php echo "key : $key, value : $n " ?></li>
    </ul>
    <?php
    endforeach;
    ?>
    

</body>
</html>