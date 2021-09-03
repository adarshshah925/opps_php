<?php 
abstract class Parentclass{
    public $name;
    abstract protected function calc($name,$a, $b);
   
}
class childclass extends Parentclass{
    public function calc($name,$a, $b){
        $this->name=$name;
        echo $a+$b;
    }  
}
$adarsh= new childclass();
echo $adarsh->calc("adarsh", 5,5);
echo $adarsh->name;