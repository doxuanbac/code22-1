<?php
    class NguoiDung{
        public static $name = "Bắc";
        public  function setName($name){
            NguoiDung::$name = $name;
        }
        public function getName(){
            return NguoiDung::$name;
        }
    }
    echo NguoiDung::$name;

    $nguoiDung = new NguoiDung;
    echo $nguoiDung->getName();
?>