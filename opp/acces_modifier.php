<?php
class Employees{
    /* types of access modifiers
    (a)Public - by default method is public but properties are not. 
     for creationg public we have to use var keyword.
     we can accesss the public property outside the class.

    (b)Private - we cannot access the private property of the class
      directly we have to use a methed defined within a class to access the properties.

    (c)Protected-It can be accessed with in the class and from derieved class.

    Note-If we don't define accesss modifier it throws an error for this we have to use var keyword before declaring the property
    Note -Only public property is Inheri ted
    */ 
    public $name="adarsh";
    protected $lname="shah";
    private $salary=12000;
    private $grade=3;
    function showName(){
        echo "the name of this employee is $this->name";  
    }
}
// Inheriting a new class programmer from Employee
class Programmer extends employees{
    private $language="PHP";
    function change_lang($lang){
        $this->lang=$lang;
    }
}
$adarsh = new Employees();
//$adarsh->showName();
