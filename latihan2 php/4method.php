<?php
    class mobil {
        // property / property
        public $roda = 4; // property $roda ini memiliki nilai default 4
        public $sepion;
        public $keterangan = "";

        // method /function
        public function jalan(){
            echo "mobil berjalan";
        }
        public function move($move = 'stop'){
            //kondisi
            if($move == 'stop'){
                $this->keterangan = "mobilnya ga jalan";
                echo "mobil stop";
                echo $this->keterangan;
            } else if($move == 'maju'){
                $this->keterangan = "mobilnya jalan";
                echo "mobil melaju...."; 
                echo $this->keterangan;
            } else if ($move == 'kanan') {
                $this->keterangan = "mobilnya berbelok ke kanan";
                echo "mobil berbelok ke kanan..";
                echo $this->keterangan;
            }else if ($move == 'kiri'){
                $this->keterangan = "mobilnya berbelok ke kiri";
                echo "mobil berbelok ke kiri..";
                echo $this->keterangan;
            } else { 
                
                echo "move undefined";
                echo $this->keterangan;
            } 
        
            }
        }
    // buatkan object dari class mobil 


    // panggil method / property yang ada pada class mobil
    $mobil = new mobil();
    echo $mobil->roda;
    // panggil method / property yang ada pada class mobil
    $mobil->jalan();
    echo PHP_EOL;
    $mobil->move();
    echo PHP_EOL;
    $mobil->move('maju');
    

?>