<?php
    class User{
        protected $name;
        private $errors = [];
        public static $fields = ['name'];

        function __construct($name){
            $this->name = $name;
        }

        function checkName(){
            if(empty($this->name)){
                $this->addError('name','username cannot be empty') ;
                return $this->errors;
            }
        }

        function getName(){
            return $this->name;
        }

        private function addError($key,$val){
            return $this->errors[$key] = $val;
        }
    }
?>