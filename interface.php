<?php
    interface Animal{
        function makeSound();
    }

    class Dog implements Animal{
        function makeSound(){
            echo 'Bark' ;
        }
    }
    class Cat implements Animal{
        function makeSound(){
            echo 'Meow' ;
        }
    }

    $dog = new Dog;
    $cat = new Cat;
    $animals = array($dog,$cat);

    // foreach($animals as $a){
    //     $a->makeSound();
    // }

    trait help{
        function shout(){
            echo 'Plz help me !';
        }
    }

    class Person{
        use help;
    }

    $p1 = new Person;
    $p1->shout();

?>