<?php 
    // class Car{
    //     public $name;
    //     function buyCar($name){
    //         $this->name = $name;
    //     }
    //     function drive(){
    //         return $this->name;
    //     }
    // };
    
    // $c1 = new Car();
    // $c1->buyCar('Doggggo');

    // echo 'U are driving a ' . $c1->drive();

    
    // class Fruit{
    //     private $name;
    
    //     // Run at the start of class creation
    //     function __construct($name){
        //         $this->name = $name;
        //     }
        //     function getName(){
            //         return $this->name;
            //     }
            
            //     // Run at the end of class creation
            //     function __destruct(){
    //         echo "This fruit is a {$this->name}";
    //     }
    // }
    
    class Car{
        private $name;

        function __construct($name){
            $this->name = $name;
        }

        protected function show(){
            echo "I am a Road with the Car {$this->name}";
        }
    }

    class Road extends Car{
        function intro(){
            $this->show();
        }
    }

    // $f1 = new Fruit('Apple');
    $c1 = new Road('Toyata');
    $c1->intro();

    // ----------------------------------------------------------
    // Const

    class Goodbye{
        const LEAVING = 'Thank you for this const';
        function bye(){
            echo self::LEAVING;
        }
    }

    echo '<br>' . Goodbye::LEAVING;
    $g = new Goodbye;
    $g->bye();

    // ---------------------------------------------------------
    // Abstract classes

    abstract class Material{
        protected $name;
        function __construct($name){
            $this->name = $name;
        }
        abstract function intro() : string;
    }

    class Cement extends Material{
        function intro() : string{
            return "What material is this. It is {$this->name}";
        }
    }

    $d = new Cement('Cement Sand');
    echo '<br>' . $d->intro();

    // -----------------------------
    abstract class ParentClass{
        abstract protected function dress($name);
    }
    class ChildClass extends ParentClass{
        function dress($name){
            if($name == 'Pink'){
                $prefix = 'Pinky';
            }else if($name == 'Brown'){
                $prefix = 'Brink';
            }else{
                $prefix = 'Lol';
            }
            return "<br> {$prefix} - {$name}";
        }
    }

    $t = new ChildClass;
    echo $t->dress('Pink')

?>