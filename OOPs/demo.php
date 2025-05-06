<?php
class Player
{
    // properties
    public $name; // public access modifier accessible anywhere
    public $speed = "30 km/h";

    //methods or functions
    function set_name($name){
        $this->name = $name; # $this is referencing he object of the class
    }
    function get_name(){
        return $this->name;
    }
    function run_start(){
        echo $this->name.' is running';
    }
}

// creating object of the class Player using new keyword
$player = new Player();
$player->set_name("Harsh"); // access class methof using -> arrow operator
echo $player->get_name();

echo $player->speed; // also we can access properties
echo "\n";
$player2 = new Player(); // we can create multiple objects or we can say that multiple player
$player2->set_name("Vinay"); // access class methof using -> arrow operator
echo $player2->get_name();
$player2->run_start();
?>