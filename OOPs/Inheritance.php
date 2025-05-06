<?php
    echo "Extendig a existing class and add some more functionality in a new class called derived class which include some properties and method from super or parent or base class. 
    and some more new properties and methods...\n";

    class Employee{
        // private $name = "harsh"; // private can't be used outside the class
        protected $name = "harsh"; // only accessible in derived class Programmer

        function showName(){
            echo $this->name;
        }
    }

    class Programmer extends Employee{
        private $lang = "php";

        function changeLang($lang){
            $this->lang = $lang;
        }
        function checkLang(){
            return $this->lang;
        }
        function changeName($newname){
            $this->name = $newname;
        }
    }

    $harsh = new Programmer();
    $harsh->showName(); // here we can use method from base class this is an example of inheritance
    
    echo "\n".$harsh->checkLang();
    
    // changing language
    $harsh->changeLang("java");
    echo "\n".$harsh->checkLang();

    $harsh->changeName("BBBBBB"); // we can't directly acccess protected $name but it can be accessed in Programmer (derived class)

    $harsh->showName(); // name has been changed

?>