<?php
    // php doesnot support multiple inheritance so we use traits for inherit from multiple trait like class

    trait Camera{
        function Image(){
            echo "Image clicked!";
        }
    }

    trait Screen{
        function Touch(){
            echo "Screen touched!";
        }
    }

    class Phone{
        use Camera; // use screen trait as base class
        use Screen; // use screen trait as base class
    }

    // now Phone object use Touch() and Image() 
    $iPhone = new Phone();
    $iPhone->Image();
    echo "\n";
    $iPhone->Touch();
?>