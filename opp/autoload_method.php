<?php 
//__autoload()-It calls automatically when you try to create an object of the class
//file name and class name must be same. 

// for using the file first.php and second.php created in class folder we have to include it first in this file

/*including file using require function
require('classes/first.php');
require('classes/second.php');

This is not a good way for including file if we have 50 or more file for inclusion
This will increase the code complexity. To remove this issue we have to use php autoload magic method

*/
// creating php autoload megic method

function __autoload($class){
    require("classes/".$class.".php");
}
//creating instance of the class first
$first=new first();
$second=new second();
