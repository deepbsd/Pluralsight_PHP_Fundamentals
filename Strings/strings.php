<?php

////////////////////////////////////////
//  Basic String Rules
////////////////////////////////////////

# There are lots and lots of string methods

# Also, use " for string interpolation and ' for no interpolation

$currency = 'penny';
$somestr = 'a $currency saved is a $currency earned'."\n";

// Notice the $currency does NOT get interpolated
echo $somestr;

$nutherString = "a $currency saved is a $currency earned\n"; 

// This was what we originally wanted;
echo $nutherString;


# use \' to escape back slashes just as in perl and bash
echo 'here\'s another string'."\n";


# sometimes you want to do this like in perl and bash
$place = 2;
echo "June came in {$place}nd place.\n";
# you can also concatenate...
echo "Joy also came in ".$place."nd place.\n";



////////////////////////////////////////
//  Here Docs
////////////////////////////////////////

echo <<<EOT

	Be not afraid of greatness;
	some are born great,
	some achieve greatness,
	and others have greatness thrust upon them.
                       -- William Shakespeare


EOT;

# if EOT has an extra space afterwards, PHP will throw an 'unexpected end of
# file' error   It will also probably give the wrong line number.


///////////////////////////////////////////
//  print vs echo
///////////////////////////////////////////

# can use print with or without parens
$message = "This above all: to thine own self be true\n";
print($message);
print $message;

echo "Et", " tu", ", ", "Brute", "!\n";
# echo accepts multiple arguments, but print will throw an error.
# print accepts only one argument

#print "Et", " tu", ", ", "Brute", "!\n";  // throws error

///////////////////////////////////////////
//  string to upper
///////////////////////////////////////////

$aquote = "To be or not to be, that is the question!\n";

$myquote = strtoupper($aquote);
$nutherQuote = "ARE YOU LISTENING TO ME???\n";

print $aquote;
print $myquote;
print $nutherQuote;
print strtolower($nutherQuote);


///////////////////////////////////////////
//  string length
///////////////////////////////////////////


$somequote = "There is no great genius without a mixture of madness.\n";

$length = strlen($somequote);

echo "How long? ".$length." characters long.\n";












?>