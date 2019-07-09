<?php

$regInt = -1234;
$octNum = 01234;
//$hexNum = OxABC;
$binaryNum = 0b01001;

var_dump($regInt);
var_dump($octNum);
//echo bin2hex($hexNum);
var_dump($binaryNum);



///////////////////////////////////
// Floats
///////////////////////////////////

$float = 1.234;
$scientific = 0.1234E4;
$scientific2 = 1234E-4;




var_dump($float);
var_dump($scientific);
var_dump($scientific2);


///////////////////////////////////
// Booleans
///////////////////////////////////

$bool = true;
$convert2Bool = 0;

var_dump($bool);
var_dump((bool)$convert2Bool);



///////////////////////////////////
// Constants
///////////////////////////////////

// ########  Constants are GLOBAL VARIABLES!!!!!

define('NEW_CONSTANT', "Constant Value\n");

// no var_dump here
echo NEW_CONSTANT;



///////////////////////////////////
//   Determine Variable Type
///////////////////////////////////


define('NEW_CONSTANT', "Constant Value\n");
$intVar = 1234;
$stringVar = "I'm a string.";
$boolVar = false;
$floatVar = 12.34;


// this will print 1
echo is_int($intVar);        // 1
echo is_int($stringVar);     // prints out NOTHING!!
echo is_string($stringVar);  // 1
echo is_bool($boolVar);      // 1
echo is_float($floatVar);    // 1
// prints out nothing...
echo is_float($stringVar);    // 

// for constant
echo defined('NEW_CONSTANT');   // 1



///////////////////////////////////
//   Functions
///////////////////////////////////

// Unlike JS, you can call the function before
// you define it!!!!
hello("Dave");


function hello($name="World"){
  echo "\nHello $name!\n";
}








?>
