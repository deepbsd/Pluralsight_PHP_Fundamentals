<?php

////////////////////////////////////////////////////////
//   Creating arrays  (indexed)
////////////////////////////////////////////////////////

// with array()
$authors = array("Charles Dickens","Jane Austin","William Shakespeare","Mark Twain","Louisa May Alcott");
// with []
$books = ["Little Women","Jane Eyre","Richard III","Oliver Twist"];

$allTypes = [10, 1.334, "howdy", true];

echo "Authors: ";
print_r($authors);
echo "Books: ";
print_r($books);
echo "All Types: ";
print_r($allTypes);


////////////////////////////////////////////////////////
//   Creating arrays  (associative)
////////////////////////////////////////////////////////

$reading_list = array(
    "Louisa May Alcott" => "Little Women",
    "Jane Austin" => "Jane Eyre",
    "William Shakespeare" => "Richard III",
    "Mark Twain" => "Huckleberry Finn",
    "Somebody"
);

// NOTE: PHP auto-assigns a numeric index to the last array item above

print_r($reading_list);


////////////////////////////////////////////////////////
//   Accessing arrays  (associative and indexed)
////////////////////////////////////////////////////////

echo "My favorite part of the reading list: ".$reading_list["Mark Twain"]."\n";
echo "My favorite author: ".$authors[3]."\n";


////////////////////////////////////////////////////////
//   array_key_exists()
////////////////////////////////////////////////////////

// Does key exist?
echo "Is there an index 3 in numeric array? ".array_key_exists(3, $authors)."\n";
echo "Is there a key named 'Mark Twain'?  ".array_key_exists("Mark Twain", $reading_list)."\n";



////////////////////////////////////////////////////////
//   in_array()
////////////////////////////////////////////////////////


#  Does value exist in array?
echo "Reading _Huckleberry Finn_ this summer?  ".in_array("Huckleberry Finn", $reading_list)."\n";

# Can also check for same type of value
$random_numbers = array(
    "first" => 18,
    "second" => 9,
    "third" => 102
);

echo "Does 9 exist in random number hash? ".in_array(9, $random_numbers, true)."\n";


////////////////////////////////////////////////////////
//   array_push()
////////////////////////////////////////////////////////

array_push($authors, "Saul Bellow");

$reading_list[$authors[5]] = "Herzog";

echo "Authors and Summer Reading List: \n";
print_r($authors)."\n";
print_r($reading_list)."\n";



////////////////////////////////////////////////////////
//   array_pop()
////////////////////////////////////////////////////////

$lastAuthor = array_pop($reading_list);

echo $lastAuthor." was in this reading list: ";
print_r($reading_list);


////////////////////////////////////////////////////////
//   unset()
////////////////////////////////////////////////////////

# gives you the option of removing a specific index or range
# can also remove multiple items at once...
unset($reading_list[0], $reading_list["Louisa May Alcott"]);
print_r($reading_list);


# unset($arrName) will delete the entire array and remove the arrName from namespace



////////////////////////////////////////////////////////
//   sorting arrays
////////////////////////////////////////////////////////


$books = array(
    "The Book of Ruby",
    "Eloquent Javascript",
    "Python Pocket Reference"
);

$book_order = array(
    "python" => "Python Pocket Reference",
    "ruby" => "The Book Of Ruby",
    "javascript" => "Eloquent Javascript"
);

# sort the indexed array:
sort($books);
echo "Sorted indexed array: \n";
print_r($books);

# NOTE:  DO NOT USE sort() ON ASSOC ARRAYS!  The keys become indexes!!!!!

# USE asort() to sort associative arrays!!!

asort($book_order);
echo "Sorted associative array: \n";
print_r($book_order);

# rsort() the array
arsort($book_order);  // change from previous version of sort...
echo "Reverse sorted (arsort()): \n";
print_r($book_order);
# ksort() to sort by keys on associative array

ksort($book_order);
echo "ksorted \$book_order variable: \n";
print_r($book_order);

# QUESTION:  is there a non-mutate version of sorting an array?

# SORTING TYPE: 0-5
#   0 = SORT_REGULAR - Default (compare items normally)
#   1 = SORT_NUMERIC - compare items numerically
#   2 = SORT_STRING - Compare items as strings
#   3 = SORT_LOCALE_STRING - compare as strings based on current locale
#   4 = SORT_NATURAL - Compare as strings using natural ordering
#   5 = SORT_FLAG_CASE - 


////////////////////////////////////////////////////////
//   count()
////////////////////////////////////////////////////////

#  No nested arrays in this one
echo "There are ".count($book_order)." elements in the book_order array. \n";

# now we have nested arrays

$more_authors = [
    "Male" => array(
        "Charles Dickens" => array("A Christmas Carol", "Oliver Twist"),
        "Saul Bellow" => array("The Dean's December", "Herzog", "The Adventures of Augie March"),
        "Mark Twain"  => array("Tom Sawyer", "Huck Finn")
    ),
    "Female" => array(
        "Jane Austin" => array("Jane Eyre", "Emma"),
        "Virginia Woolfe" => array("A Room of One's Own", "To The Lighthouse")
    )
];

echo "Here's the array WITHOUT recursive counting turned on: ".count($more_authors)."\n";
#  if we run count() with 1 flag, that says "Count Recursive"
echo "Now we're counting recursively through this array: \n";
print_r($more_authors);
echo "And here's the count of all the elements, including sub_elements: ".count($more_authors, 1)."\n";
echo "You can also use COUNT_RECURSIVE as 2nd argument: ".count($more_authors, COUNT_RECURSIVE)."\n";


////////////////////////////////////////////////////////
//   foreach()
////////////////////////////////////////////////////////

echo "Here is the \$book_order array: \n";
print_r($book_order);

echo "Now let's iterate through them: \n";
foreach($book_order as $key => $value)
{
    echo sprintf("Language:   %-10s     Book:   %10s \n",$key,$value);
}






?>
