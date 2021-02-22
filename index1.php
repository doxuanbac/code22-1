<?php
    class MyParentClass{
        public $firstName = "Wiloke";
        protected $lastName = "WordPress";
        protected $fullName = "Wiloke Wrodpress";

        public function setFirstName($firstName){
            $this->firstName = $firstName;
        }
        public function setLastName($lastName){
            $this->lastName = $lastName;
        }
        public function setFullName($fullName){
            $this->fullName = $fullName;
        }

    }

    class ChildClass extends MyParentClass{
        public function getLastName(){
            return $this->lastName;
        }
        public function getFullName(){
            return $this->fullName;
        }
    }

    // concrete
    $aMyClass = new MyParentClass();
    // $aMyClass->setFullName("ok");
    // echo $aMyClass->fullName;

    $aChildClass = new ChildClass();
    echo $aChildClass->getFullName();
?>

<?php
    class MyParent
    {
        public $color = "red";
        public function setColor($color) {
            $this->color = $color;
        }
        // public static function getMyAge(){
        //     return self::$myAge;
        // }
    }

    class MyChild extends MyParent{
        public function getColor()
        {
            return $this->color;
        }

    }

    class MyParent1
    {
        public static $color = "red";
        public function setColor($color) {
            self::$color = $color;
        }
        // public static function getMyAge(){
        //     return self::$myAge;
        // }
    }

    class MyChild1 extends MyParent1{
        public function getColor()
        {
            return self::$color;
        }

    }

    // MyParent::$myAge = 12;
    // echo MyParent::getMyAge();

    $aMyParen = new MyParent();
    $aMyParen->setColor("Green");
    $aMyChild = new MyChild();
    echo $aMyParen->color;
    echo ' ' . $aMyChild->getColor();
    // $aMyParen->myAge = 12;
    // echo $aMyParen->getMyage();

    echo '<br />';
    MyParent1::setColor("green");
    $aMyChild1 = new MyChild1;
    echo MyParent1::$color;
    echo ' ' . $aMyChild1->getColor();
?>