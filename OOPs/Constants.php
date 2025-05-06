<?php
    class Hell{
        const CONSTANT_VARIABLE = "this is constant can't be changed!";
        function hello(){
            echo self::CONSTANT_VARIABLE; // we can access constant variable inside a class using self keyword
        }
    }

    $obj = new Hell();
    echo $obj::CONSTANT_VARIABLE;
    echo "\n";
    echo Hell::CONSTANT_VARIABLE; // also

    $obj->hello();

?>