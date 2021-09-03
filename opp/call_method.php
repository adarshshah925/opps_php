<?php

//__call()-this a magic function of php that accepts two argument (1)method_name and (array of parameter)
//
class abc{
    private $name;
    private $age;
    private function display($name, $age){
       $this->name=$name;
       $this->age=$age;
       echo $age ,$name;
    }
    function __call($method,$args){
        //print_r($args);
        // Checking that the method eists or not
        if(method_exists($this, $method)){
            //callback function defined outside the class
            call_user_func_array([$this,$method],$args);
        }else{
            echo "trying to access private method";
        } 
    }
    
}
$test=new abc();
$test->display("adarsh",22);

