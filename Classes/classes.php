<?php

/////////////////////////////////////
//
//   Note: no $ in front of attribute name after ->

class Writer {
  const AVG_LIFE_SPAN = 79;

  public $firstName = "Samuel";
  public $lastName = "Clemens";
  public $yearBorn = 1899;


  function __construct(){           // Create Constructor
    echo "I'm in the constructor.\n";
  }


  public function getFirstName(){
    return $this->firstName;
  }
  public function setFirstName($name){
    $this->firstName = $name;
  }
}



/////////////////////////////
//  Now we access a method...
/////////////////////////////


$myObject = new Writer();

echo "Before the change: ".$myObject->firstName."\n";

# overwrite the value  
$myObject->firstName = "Samuel Langhorne";


echo "After the change: ".$myObject->firstName."\n";

echo "Accessing a non public constant of a class:  ".$myObject::AVG_LIFE_SPAN."\n";


# Set the value of firstName
$myObject->setFirstName("Sam");


echo "After calling 'setFirstName()' and setting name to 'Sam'   ".$myObject->firstName."\n";
echo "Can also call getter as well:   ".$myObject->getFirstName()."\n";

/////////////////////////////////////////////////////////////////////////
//   New Class called coder
/////////////////////////////////////////////////////////////////////////

class coder {
    # optional to set up publicly accessible attributes
    public $firstname;
    public $lastname;
    public $editor;
    private $callsign;

    function __construct($firstname="first",$lastname="last",$editor="nano",$callsign=""){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->editor = $editor;
        $this->callsign = $callsign;
    }


    # do we need 'public' in front of methods?
    public function getName(){
        return $this->firstname." ".$this->lastname." and I love ".$this->editor.", callsign ".$this->callsign."!\n";
    }
    public function setName($first,$last){
        $this->firstname = $first;
        $this->lastname = $last;
    }
    public function setEditor($editor){
        $this->editor = $editor;
    }
}

$dave = new coder("Dave","Jackson","vim","Jax");
$dave->setEditor("gvim");
$dave->special = "he thinks he's special";
echo $dave->getName();
print_r($dave);

# Not sure how to deal with arrays in class props

////////////////////////////////////////////////////
//     Static properties
////////////////////////////////////////////////////

class powerCoder extends coder {
    public static $favOS = "UNIX";
    public $languages = ["javascript"];

    public function addLanguage($lang){
        array_push($this->languages, $lang);
    }
    public function getLanguages(){
        return implode(", ",$this->languages);
    }
    public static function getFavOS(){
        // Sometimes we might use *parent* instead of *self*
        return "My favorite OS is ".self::$favOS."!!\n";   // Use *self* here
    }

}

$scotty = new powerCoder("Scotty","Devy","Vim","Scotty");
print_r($scotty);
$scotty->addLanguage("PHP");
echo $scotty->getName()."\n";
echo $scotty->getLanguages()."\n";


/////////////////////////////////////////////////////
//   NOTE: private funcs and attributes
//   DO NOT get inherited
//   protected funcs and attributes DO get inherited
/////////////////////////////////////////////////////

// Can use either instance ($scotty) or class itself (powerCoder)
echo $scotty->getfavOS()."\n";


/////////////////////////////////////////////////////
//     require vs include:  include keeps going if it
//     cannot find the file.  require throws an error
//     and halts if it cannot find the file
//////////////////////////////////////////////////////









?>
