<?php
class Player{
    var $name;
    public $speed;
   
    function set_name($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }
    function get_name(){
      echo $this->name ;
      echo   $this->speed;
    }
}
$player1= new Player();
$player1->set_name("adarsh", 5);
echo $player1->get_name();