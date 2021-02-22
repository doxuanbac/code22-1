<?php
    // visibiliti 
    class myClass{
        public $public = "Truy cập dữ liệu ở bất cứ đâu";
        private $private = "truy cập dữ liệu ở trong class";
        protected $protected = "truy cập dữ liệu ở trong class và có tính kế thừa";
        function setPrivate(){
            return $this->private;
        }
        function setProtected(){
            return $this->protected;
        }
    }

    $doiTuong = new myClass();
    echo $doiTuong->public;
    echo $doiTuong->setPrivate();
    echo $doiTuong->setProtected();

    class aClass extends myClass{
        function layProtected(){
            return $this->protected;
        }
    }
    $doiTuongA = new aClass();
    echo $doiTuongA->setProtected();
    echo $doiTuongA->public;
?>