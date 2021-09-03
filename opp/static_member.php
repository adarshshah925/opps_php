<?php 
class A{
    public static $age=22;
    public static $name;
   /* public static function show($n){
        echo self::$name=$n;
    }
    */
}
class B extends A{
    public static function show($n){
        echo parent::$name=$n;
    }
}
echo A::$age;
echo B::show("adarsh Kumar shah");
//example of late static binding
class c{
public static $name="adarsh";
   public function show(){
       echo static::$name;
   }
}
class d extends c{
    public static $name="kumar";
}
$test=new d();
$test->show(); 
