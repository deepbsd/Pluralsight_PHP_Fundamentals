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

//   !   'not' logical operator   This operator omvents the value



////////////////////////////////////////////////////////////
//   If / Else
////////////////////////////////////////////////////////////


$authors = ["Saul Bellow","Arthur Conan Doyle","Mark Twain","William Faulkner","Ralph Ellison"];
$count = count($authors);

if ($count === 1) { echo "There is one author."; }
else if ($count === 0) { echo "There are no authors."; }
else echo "There are ".$count." authors. ";

echo PHP_EOL;

echo "I was playing with the if_else structure above".PHP_EOL;




////////////////////////////////////////////////////////////
//   Switch Statement
////////////////////////////////////////////////////////////


$inches_rain = rand(0,20);

$want_to_play = true;

switch($inches_rain){
case 0:
    echo "Play outside as usual! There's no rain!";
    break;
case ($inches_rain < 8):
    echo $inches_rain." inches of rain: Bring raincoat.  We're still playing outside!";
    break;
case ($inches_rain < 14):
    echo $inches_rain." inches of rain: It's raining hard. We're going, but it won't be much fun.";
    break;
case ($inches_rain >= 14):
    echo $inches_rain." inches of rain: Okay, forget it.  It's raining too hard.";
    $want_to_play = false;
    break;
default:
    echo "You had negative inches of rain?????  Wha?";
    break;
}

echo PHP_EOL;


// Here's another example with a spaceship operator


$num1 = rand(0,5);
$num2 = rand(0,5);

switch ($num1 <=> $num2){
case 1:
    echo $num1." Greater Than ".$num2."!";
    break;
case 0:
    echo $num1." Equals ".$num2."!";
    break;
case -1:
    echo $num1." Less than ".$num2."!";
    break;
}

echo PHP_EOL;


////////////////////////////////////////////////////////////
//   Ternary Operator
////////////////////////////////////////////////////////////



$inches_rain = rand(0,20);

$play_outside = ($inches_rain > 13) ? false : true;

echo "Playing condition equals: ".$play_outside." because we have ".$inches_rain." inches of rain.".PHP_EOL;


////////////////////////////////////////////////////////////
//   NULL COALESCE OPERATOR
////////////////////////////////////////////////////////////



// This operator means:   If $var is defined, use its value, otherwise set the default value to what's after the ??
//
// It's like using isset($var)   with a ternary operator.  It's shorthand for that

// Example


echo "///  How about some Coalexce Operator Stuff???";

$days_of_week = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
$index = rand(0,6);
$weekday = $days_of_week[$index];



echo "Weekday is ".$weekday."!".PHP_EOL;

if (in_array($index, [1,2,3,4,5])) {
    $message = "It's a schoolday.";
}

// Accomplishes same as ternary if $message isset
$message = $message ?? "NOT a schoolday!!!!!!";


echo $message.PHP_EOL;



// another example with chaining:

$b = "here";
$d = "now";

echo $a ?? $c ?? $e ?? $b." ".$d;

echo PHP_EOL;




////////////////////////////////////////////////////////
//    For    While   (with alternative syntax)
////////////////////////////////////////////////////////


$count = 0;

while ($count < 10){
    echo "While loop: ".$count.PHP_EOL;
    $count++;
}

for($count=0; $count<10; $count++){
    echo "For loop: ".$count.PHP_EOL;
}

//  alternative syntax

# replace  braces with : and 'endwhile' or 'endfor'

for ($count=0; $count<10; $count++):
    if ($count % 2 === 0) :
        echo "Even number!\n";
    else: 
        echo "Odd number!\n";
    endif;
endfor;















?>
