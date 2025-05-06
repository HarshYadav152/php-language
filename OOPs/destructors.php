<?php
    class Desctructor{
        public $name;
        // constructor
        function __construct($name) // this is a constructor called whenever object is created
        {
            $this->name = $name;
        }
        // destructor
        function __destruct()
        {
            echo"I am destructing..".$this->name."\n";
        }
    }

    $test = new Desctructor("Hello");
    echo $test->name."\n";

    $test2 = new Desctructor("Hello2");
    echo $test2->name."\n";

    echo "After this all objects which are created recently (in that order) wil destroy. When the script is about to be end its execution...\n";
?>