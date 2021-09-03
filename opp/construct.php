<?php 
class Employee{
    public $name;
    public $age;
    private $salary;

    function __construct($name, $age, $salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    function set_salary($salary){
       $this->salary=$salary;
    }
    function get_salary(){
       return  $this->salary;
    }    
}
$adarsh=new Employee('adarsh',22,12000);
$shah=new Employee('kumar', 45,12000);
//echo $adarsh->get_salary();
print_r($adarsh);

echo $adarsh->get_salary();
//echo $adarsh->__construct('subham', 55,1200);
