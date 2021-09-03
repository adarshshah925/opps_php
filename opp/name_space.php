<?php

//we cannot create a two or more classes of same name in a single file 
//we cannot include two or more file having a class of same name  this will throw an error 
//eror-Fatal error: Cannot declare class Product, because the name is already in use in /opt/lampp/htdocs/opp/second.php on line 3
// To remove this issue we use namespace in each file
// We cannnot create asame class in the page if a class is already created in included file this will throw an error
//error-Fatal error: Cannot declare class product because the name is already in use in /opt/lampp/htdocs/opp/name_space.php on line 12

require('first.php');
require('second.php');
// creating alias of namespace first
use first as f; 
// creating object for first
$first= new f\Product();
// creating object for second
$second=new second\Product();
