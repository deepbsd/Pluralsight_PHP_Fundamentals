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
//   Accessing arrays  (associative)
////////////////////////////////////////////////////////

echo "My favorite part of the reading list: ".$reading_list["Mark Twain"]."\n";
echo "My favorite author: ".$authors[3]."\n";


?>
