<?php

# There are lots and lots of string methods

# Also, use " for string interpolation and ' for no interpolation

$currency = 'penny';
$somestr = 'a $currency saved is a $currency earned';

// Notice the $currency does NOT get interpolated
echo $somestr;

$nutherString = "a $currency saved is a $currency earned"; 

// This was what we originally wanted;
echo $nutherString;





?>
