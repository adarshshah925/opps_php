<?php 
trait test{
    public function show(){
        echo "adarsh";
    }
}
trait test1{
    public function display(){
        echo "Kumar Shah";
    }
}
class A{
    // using multiple traits in a single class
 use test,test1;
}
class B{
 use test;
}

class c{
 use test;
}
$a=new A();
$a->show();
$a->display();

$b=new B();
$b->show();

