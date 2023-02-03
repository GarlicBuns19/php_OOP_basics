<?php
    abstract class Workout{
        abstract function warmup();
        
        function pushup($pushups){
            echo "I just did $pushups pushups !";
        }
    }

    class Person extends Workout{
        function warmup(){
            echo 'I am warming up';
        }
    }

    $p1 = new Person;
    $p1->warmup();
    $p1->pushup(30);
?>