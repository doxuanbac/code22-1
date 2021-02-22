<?php
    class phepToan{
        private $a;
        protected $b;
        public $c = 100;
        public $d = 50;
        public function seta($_a){
            $this->a=$_a;
        }
        public function setb($_b){
            $this->b=$_b;
        }
        public function geta(){
            return $this->a;
        }
        public function getb(){
            return $this->b;
        }
        public function Tong($x, $y) {
            return $x+$y;
        }
    }
    $toan = new phepToan;
    // echo $toan->c ." + " .$toan->d ." = ".$toan->Tong($toan->c, $toan->d);
    
    $toan->seta(-45);
    $toan->setb(60);
    echo $toan->geta() ." + " .$toan->getb() ." = ".$toan->Tong($toan->geta(), $toan->getb());
?>
