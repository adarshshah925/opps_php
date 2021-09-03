<?php
//destructor method automatically call when the instance of the class has no longer any reference
// example:- mysqli connection close 


class abc{
    function __construct(){
        echo "I am a constructor";
    }
    function hello(){
        echo "hello every one";
    }
    function __destruct(){
         echo "I am destructor";
    }
}
$test=new abc();
$test->hello();