<?php
    // access modifiers
    // - public 
    // - private
    // - protected ( accessed from inherited class or derived class ) (not outside of the class) 
    // By default properties and methods are treated as public

    class Employee{
        // if we dont provide any access modifiers to the variales so bydefault it is public 
        // but we have to use var keyword for this
         
        // var $name = "harsh";  // this will give error without access modifiers ao we have to use var
        private $name = "harsh"; // private can't be used outside the class

        function showName(){
            echo $this->name;
        }
    }

    $emp = new Employee();

    // echo "\n$emp->name"; // we can access this $name variable 
    // echo "\n$emp->name"; // when it is private we can't access this $name variable 

    $emp->showName(); // but methods can access this variable

?>