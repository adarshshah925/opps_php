<?php 
/*
 __get()- this magic method runs automatically when we try to access the private property of 
the calsss or the property which is not defined in the class
array_key_exists($key,$array_name):- This function check that the array exists a desired key or not.

*/
class abc{
    private $data=["name"=>"adarsh","course"=>"PHP", "Fees"=>12000];
    private $name="name";
    function __get($key){
       if(array_key_exists($key,$this->data)){
           echo $this->data[$key];
       }elseif(property_exists($this,$key)){
            echo $key;
       }
       else{
           echo "You are trying to access non existing property or private property";
       }
    }
}
$test=new abc();
$test->Fees;
$test->name;