<?php

include 'Person.php';    // use of include statement

class Author extends Person {

    public $books = [];


    public function addTitle($title){
        array_push($this->books, $title);
    }

    public function getTitles(){
        return "The titles are ".implode(", ", $this->books);
    }

}

$saul = new Author("Saul","Bellow",1915,"en");
$saul->addTitle("The Adventures of Auggie March");
$saul->addTitle("The Dean's December");
$saul->addTitle("Herzog");
$saul->addTitle("Humbolt's Gift");
echo $saul->getTitles()."\n";


///////////////////////////////////////////////////////
//   because of 'include' statement and inheritance
//   we have access to all of parent class functions
///////////////////////////////////////////////////////


// This works!
echo $saul->getName();




?>
