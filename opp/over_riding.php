<?php 
class base{
    public $name="parent class";
}
class derived extends base{
    public $name="child Class";
}
$test =new base();

$test1=new derived();

echo $test->name;