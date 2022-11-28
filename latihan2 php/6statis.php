<?php
    class Singa {

        // atribut yang bersifat static
        public static $kaki = 4;
        //method yang bersifat static
        public static function lari(){
            echo "singa berlalri...";
        }
    }

    // pemanggilan atribut static pada class singa
    echo "kaki singa ada" . Singa::$kaki;

    echo PHP_EOL;
    // pemanggilan function static pada class singa
    Singa::lari();
    

?>