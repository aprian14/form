<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 (Perulangan)</title>
</head>
<body>
    <?php 
        // looping For => perulangan yang diketahui nilai akhirnya
        /*
        for($nilaiawal; $variable <= $batasan; $variable ++) {
            script menampilkan atau melakukan apa sebanyak perulangan yang disetting
        }
        */
        // increment (menaik)
        for($i = 1; $i <= 10; $i ++ ) {
            // menampilkan Hello sebanyak perulangan yang di setting
            echo "hello - $i <br>";
        }
        
        // decrement (menurun)
        for($a = 10; $a >= 1; $a --){
            echo "hello - $a <br>";
        }
        echo "<br>";

        // looping WHILE => perulangan yang tidak diketahui batas akhirnya
        /*
        $nilaiawal = 1;
        while($nilaiawal <= $batasan){
            script menampilkan atau melakukan apa sebanyak perulangan yang disetting

            kondisi 
            apkah ++ / --

        }
        */

        $nilaiawal = 1;
        while($nilaiawal <= 10) {
            // apa dilakukan 
            echo "hello while - $nilaiawal <br>";
            //kondisi
            $nilaiawal++;

        }

        echo "<br>";
        
        // perulangan FROEACH  => biasa dipakai untuk perulangan pada tipe data array 
        $data1 = [
            'BA001',
            'BA002',
            'BA003'
        ];

        $data2 = array(
            'CA001',
            'CA002',
            'CA003'
        );

        /*
        foreach($variable as $vr){
            lakukan apa yang dilakukan sebanyak perulangan datanya
        }
        */

        foreach($data1 as $dt1) {
            echo "$dt1 <br>";
        
        }
        

    ?>
</body>
</html>