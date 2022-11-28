<?php
    class Mobil {
        // property
        public $roda = 4; // Property $roda ini memiliki nilai default 4
        public $sepion;

    }

    $mobil1 = new mobil();
    $mobil2 = new mobil();

    // panggil atribut roda
    print($mobil1->roda);
    echo PHP_EOL;       // Enter di PHP
    $mobil1->sepion = 2;       // mengisikan suatu nilai ke dalam atribut class
    echo $mobil1->sepion = $mobil->roda + 2;

    
?>