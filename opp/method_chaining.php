<?php
// method chainin-It is process of running more function using single object in a single line.
//for method chaining we have to return $this in every function
class abc{
    function first(){
        echo "this is first<br>";
        return $this;
    }
    function second(){
        echo "this is second<br>";
        return $this;
    }
    function third(){
        echo "this is third<br>";
    }
}
$test=new abc();
$test->first()->second()->third();