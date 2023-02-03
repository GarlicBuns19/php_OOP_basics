<?php
    class Train{
        private $name;
        protected $length;
        protected $color;
        protected $speed;
        public static $driver = 'Steve';

        const Eg = 'U cannot change this';

        // Run at the start of train creation
        function __construct($name,$length,$color,$speed){
            $this->name = $name;
            $this->length = $length;
            $this->color = $color;
            $this->speed = $speed;
        }

        protected function getName(){
            return "The train's name is {$this->name}";
        }
        protected function setName($name){
            $this->name = $name;
            return "The train's name has been updated to {$this->name}";
        }
        protected function setDriver($new_driver){
            if(empty($new_driver)){
                echo 'Train has no Driver';
            }else{
                self::$driver = trim($new_driver);
                return "The train's new driver is " . self::$driver;
            }
        }

        // Run after trin creation
        function __destruct(){
            echo "The train {$this->name} was created with
                    Length : {$this->length} <br>
                    Color : {$this->color} <br>
                    Speed : {$this->speed} <br>
                ";
        }
    }

    class Train1 extends Train{
        function trainName(){
            echo $this->getName() . '<br>';
        }
        function updateTrain($name){
            echo $this->setName($name) . '<br>';
        }
        function updateDriver($name){
            echo $this->setDriver($name) . '<br>';
        }
    };

    $train1 = new Train1('Light',285,'Night Blue',158);
    // $train2 = new Train1('Hikun',395,'Blue',158);

    $train1->trainName();
    echo '<br>';
    // $train1->updateTrain('Liken');
    // $train1::$driver;
    $train1->updateDriver('Chad');
    // echo $train1::Eg;
?>
