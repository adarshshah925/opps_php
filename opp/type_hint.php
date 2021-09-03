<?php
function sum(int $a){
    echo $a+10;
}
//sum("adarsh"); passing strin value
sum(10);
// creating a function  that accepts array data type
function fruits(array $name){
    foreach($name as $key=>$value){
        echo $value;
    }
}
$a=array("banana");
fruits($a);

// example of classes
class hellow{
    public function sayhello(){
        echo "hello every one";
    }
}
class bye{
    public function saybye(){
        echo "bye every one";
    }
}
function display(hellow $c){
  $c->sayhello();
}
$test=new hellow();
display($test);

// Advance example of type hinting
class school{
    public function getNames(student $names){
        foreach($names->Names() as $name){
            echo $name. "<br>";
        }
    }
}
class student{
    function Names(){
        return ['Ram', 'Shyam', 'Mohan'];
    }
}
$stu=new student();
$sch=new school();
$sch->getNames($stu);
/* 
valid Data types
int
Float 
string
Bool
Array
Class/Interface Name
Object
*/
function show($name, $age){
    $fname=$name;
    $c_age=$age;

    echo $fname, $c_age;
}
show("adarsh",20);
