<?php
//__set($property, $value)-This is a magic method of php which is used to set the value of the private property accesing outside the class.
//It accepts two parameter (a)property_name (b)Property_value
// It runs automatically when we initialise  the value to the property.
//property_exists()- this function checks that the property exists or not in a class.

class abc{
    private $name="adarsh";
    function __set($property, $value){
      // echo $property;
       if(property_exists($this,$property)){
           $this->name=$value;
       }else{
           echo "No property exists";
       }
    }   
}
$test=new abc();
echo $test->name="Kumar";
$test->age="22";