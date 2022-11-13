<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funcition  / method  (latihan 7)</title>
</head>
<body>
    <?php
        // function =>kelompok script yang berupa instruksi2 (fungsi yang kita buat)
        /*
        1. function tanpa menerima parameter / inputan 
        function namaFunction(){

        }

        2. function yang menerima parameter/inputan
        function namaFunction(parameter)
        {

        }
        */

        function cetakHello (){
            // script yang dijalankan 
            echo "hello";

        }
        function getData() {
            return "Data berhasil diget";
        }

        function luassegitiga($alas, $tinggi){
            // proses hitung luas 
            $luas = $alas * $tinggi / 2;

            // biar hasil perhitungan di function ini bisa dipakai, maka kita return hasilnya
            return $luas;
        }

        // cara panggil function  => cetakhello()

    ?>
    <h1><?php cetakHello()?></h1>
    <p> Panggil function getData() : <?php getData(); ?> </p>
    <p> Panggil function getData() : <?php echo getData() . "sssss";?> </p>
    <h5> panggil function getData($alas, $tinggi) <?php echo luassegitiga(20,35) ?></h5>
</body>
</html>