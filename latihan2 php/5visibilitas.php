<?php

    class PersegiPanjang {

        private $panjang = 120;
        private $lebar = 15;
        protected $alas = 25;

        public $nilai = 50;

        public function getAlas(){
            return $this->alas;
        }
        public function luas(){
            $luas = $this->panjang * $this->lebar;
            echo $luas;
        }
        function cek(){
            echo "cek";
        }
        public function rahasia(){
            echo "rahasia di dapatkan!";
        }
        


    }

    $persegi = new PersegiPanjang();

    // echo $persegi->panjang; // tidak bisa memanggil atribut / methode yang private

    $persegi->luas();
    echo $persegi->nilai;
    echo PHP_EOL
    

?>