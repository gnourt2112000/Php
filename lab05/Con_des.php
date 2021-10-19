<?php
    class BaseClass{
        public $name = "BaseClass";
        function __construct(){
            print("In " . $this->name . " constructor <br>");
        }

        function __destruct()
        {
            print("Destroying ".$this->name."<br>");
        }
    }

    class SubClass extends BaseClass{
        function __construct()
        {
            $this->name = "SubClass";
            parent::__construct();
        }

        function __destruct(){
            parent::__destruct();
        }
    }

    $obj1 = new SubClass();
    $obj1 = new BaseClass();
    print($obj1->name."<br>");
    // print($obj2->name."<br>");

?>