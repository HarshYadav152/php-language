<?php

    class Constructor{
        public $name;
        function __construct($name) // this is a constructor called whenever object is created
        {
            $this->name = $name;
        }
    }

    $const = new Constructor("Harsh");
    echo $const->name;
?>