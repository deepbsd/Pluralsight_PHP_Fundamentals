<?php

////////////////////////////////////////////////////////////
//    Operators
////////////////////////////////////////////////////////////



echo "Basic operators: + - * / % **       \n";

echo "2 + 2 is ".(2*2)."\n";
echo "2 - 2 is ".(2-2)."\n";
echo "2 * 2 is ".(2*2)."\n";
echo "2 / 2 is ".(2/2)."\n";
echo "3 % 2 is ".(3%2)."\n";
echo "3 ** 2 is ".(3**2)."\n";

////////////////////////////////////////////////////////////
//    Incrementing, Decrementing Operators
////////////////////////////////////////////////////////////

$numvar = 2;
//$numvar++;    // ++$numvar pre-increments
echo ++$numvar."\n";   // no need for a separate line  $varname++ increments AFTER echo

////////////////////////////////////////////////////////////
//    Assignment operators
////////////////////////////////////////////////////////////


//   +=    -=    *=    /=    %=    **=



////////////////////////////////////////////////////////////
//    String operator
////////////////////////////////////////////////////////////


//    .     .=



////////////////////////////////////////////////////////////
//   Concatenation operator 
////////////////////////////////////////////////////////////

$myString = "Hello ";

$myString .= "World!";

echo "Concat operator: ".$myString."\n";


////////////////////////////////////////////////////////////
//   Comparison Operators
////////////////////////////////////////////////////////////


echo "Are these equal? ";
var_dump(8 == '8');    // equality operator
var_dump(8 === '8');    // strict equality operator
// just like in Javascript
echo "\n";




//    <>   Not equal
echo "Trying out <> operator: ";
var_dump(7 <> 5)."\n";
echo "Same as !=  <> and != are the same...\n";

//  >   >=     Greater than & Greater than or equal
var_dump(7 > 5);
var_dump(7 >= 9);



//  <   <=     Less than & Less than or equal
var_dump(7 < 5);
var_dump(7 <= 9);



//  <=>   Spaceship operator
echo "Spaceship operator: <=>  \n";
echo   2 <=> 1;
echo "\n-1 means left side value is less than, 0 means left/right values are equal, 1 means right is greater than left.   \n";


////////////////////////////////////////////////////////////
//   Logical Operators
////////////////////////////////////////////////////////////


//     &&   and   ||   or   




















?>
