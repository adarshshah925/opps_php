<?php
class abc{
    public $name="adarsh";
    private $course="php";
    private $data=['fname'=>'adarsh', 'lname'=>'shah'];
    public function __isset($property)
    {
        foreach($this->data as $value){
            echo " ".$value;
        }
    }
}
$test=new abc();
echo isset($test->data);