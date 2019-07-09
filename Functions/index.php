<?php

function hello($name="World") {
  echo "Hello {$name}!\n";
}

//hello("Dave");

$who = "Dave";

//hello($who);


function nameAge($name, $age) {
  echo "$name is aged $age!\n";
}

nameAge("Dave",46);


///////////////////////////////////////////
//  Default Parameters
///////////////////////////////////////////

# Just like above, but '=' doesn't need to be touching
# the assigned values

// Node the '.' operator to join strings!!!
function addOne($first, $second = 1) {
  return $first + $second."\n";
}

echo addOne(5);


///////////////////////////////////////////
//  Variable Functions
///////////////////////////////////////////


# Notice the 'addOne' is in quotes!!!!!
# when you execute it you'll put parens on it!
$functionVariableName = "addOne";

echo "Here's the function variable output: \n";
echo $functionVariableName(5);



///////////////////////////////////////////
//  Variable Scope
///////////////////////////////////////////

$authorName = "William Shakespeare";

function sayAuthorName() {
  $authorName = "Charles Dickens";
  echo $authorName;
}

echo "Outside of the function: ".$authorName."\n";
echo "Inside of the function: ".sayAuthorName()."\n";


///////////////////////////////////////////
//  Global Variable Scope
///////////////////////////////////////////

# global keyword must be inside a function

$authorName = "Eugene O'Neil";

function setAuthorName(){
  global $authorName;
  $authorName = "Saul Bellow";
  echo "...Changed authors...\n";
}

echo "Outside function: ".$authorName."\n";
echo "Inside function: \n";
setAuthorName()."\n";
echo "Outside function again: ".$authorName."\n";








?>
