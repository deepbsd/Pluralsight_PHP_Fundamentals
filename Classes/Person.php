<?php
class Person {

    public $firstname;
    public $lastname;
    public $yearBorn;
    public $language;

    public function __construct($first="first", $last="last", $yrBorn=0, $lang="en"){
        $this->firstname = $first; 
        $this->lastname = $last; 
        $this->yearBorn = $yrBorn; 
        $this->language = $lang; 
    }

    public function getName(){
        return "My name is ".$this->firstname." ".$this->lastname.".\n";
    }

}


?>
