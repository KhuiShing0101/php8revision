<?php

    class Animal
    {
        //
    }

    $dog=new Animal;

    var_dump ($dog);
?>

<?php
    // Method from function
    // property from variable
    // pseudo class $this->
    // dark prperty ->
    class Boss
    {
        public $name;

        public function run()
            {
                echo "$this->name is running..";
            }
    }
    $bigBoss= new Boss;
    $bigBoss->name="Elon Mask";
    $bigBoss->run();
?>

<?php
    // php constructor
    class Human
    {
      public function __construct()
      {
        echo "Creating constructor";
      }  
    }
    $Human= new Human;
?>

<?php
    class Girl
    {
        public function __construct()
        {
            echo "creating girl object";
        }
    }
    
    $gender= new Girl;
?>

<?php
    class Student
    {
        static $type= "Special";
        static function info()
        {
            echo "Group:" .static::$type;
        }
    }
    echo Student :: $type; // Special
    Student :: info(); // Group: Special
?>

<?php

    class Baby
    {
        private $name;

        public function __construct($name)
        {
            $this ->name = $name;
        }

        public function run()
        {
            echo "$this->name is running";
        }
    }

    $Gf=new Baby ("Bobby");
    $Gf->run();
?>

<?php

    class Man 
    {
        function __construct(private $name)
        {
            //
        }
        function run() 
        {
            echo "$this->name is running";
        }
    }

    $Baki=new Man("Baki");
    $Baki->run();
?>

<?php

    class Villin
    {
        protected $name;

        public function __construct($name)
        {
            $this->name= $name;
        }
        public function run()
        {
            echo "$this->name is running";
        }
    }
    class Top extends Villin
    {
        function fight()
        {
            echo "$this->name NO 1 Fighter";
        }
    }

    $Fighter = new TOP ("Yojiro");
    $Fighter-> fight();
?>


<?php
    
    class Hero
    {
        static function info ()
        {
            echo "this is a hero";
        }
    }
    class Subhero extends Hero
    {
        //
    }
    class Subhero1 extends Subhero
    {
        //
    }

    subhero1 :: info();
?>

<?php

    // You Cant overide final method
    class Player

    {
        protected $name;

        public function __construct ($name)

        {
            $this->name=$name;
        }
    }

    class Front extends Player 
    {
        private $color;
        public function __construct ($name,$color)

        {
            parent::__construct ($name);
            $this->color=$color;
        }

        public function profile()
        {
            echo "$this->name is $this->color ";
        }
    }

    $R7= new Front ("R7", "Potugel");
    $R7->profile();
?>

<?php
    //Interface Method
    class Tiger 
        {
            public function run()
            {
                echo "Tiger is running";
            }
        }
    
    class Lion
        {
            public function run()
            {
                echo "Lion is hunting";
            }
        }

    function app (Tiger $obj){
        $obj->run();     
       }
    function app1(Lion $obj){
        $obj->run();
    }

    app(new Tiger);   // The dog is running 
    app1(new Lion);  // 
?>

<?php
    // similar objects able to use INTERFACE

    interface FighterClub
    {
        public function fight();
    }

    class One implements FighterClub
    {
        public function fight()
        {
            echo "Light Weight Major";
        }
    }

    class UFC implements FighterClub
    {
        public function fight()
        {
            echo "Heavy Weight Major";
        }
    }
    
    function app3(FighterClub $obj){
        $obj->fight();
    }

    app3(new One);
    app3(new UFC);
?>

<?php

    interface Animal1
    {
        public function move();
    }
    
    interface Livestock
    {
        public function isFriendly();
    }

    Class Elephant implements Animal1,Livestock
    {
        public function move()
        {
            echo "Elephant is walking";
        }

        public function isFriendly()
        {
            return true;
        }
    }

    $Zoo= new Elephant;
    $Zoo-> move();
?>

<?php
    interface  ProgrammingLanguage
    {
        public function type();
    }

    interface isOk
    {
        public function isHard();
    }

    Class PHP implements ProgrammingLanguage,isOk
    {
        public function type()
        {
            echo "Procedural Progamming langauge as a Server Language";
        }

        public function isHard()
        {
            echo "Yeah It is alittle bit";
        }
    }

    $PHP = new PHP;
    $PHP -> type();
?>

<?php
    // calculate class need two options of processes to calculate
    // If you cant use multiple inheritances because of you should use ------->>> trait
    trait Math
    {
        public function add($a,$b)
        {
            echo $a + $b;
        }
    }

    trait Area 
    {
        private $PI=3.14;
        public function circle ($r)

        {
            echo $this->PI*$r*$r;
        }
    }

    class Calculator 
    {
        use Math,Area;
    }

    $calc= new Calculator ;
    $calc->add(1,2);
    $calc->circle(5);
?>

<?php
    trait Physics
    {
        public function add($a,$b)
        {
            echo $a + $b;
        }
    }
    
    trait Triangle
    {
        private $A=2;

        public function circle($r)
        {
            echo $this->A*$r*$r;
        }
    }

    class Calculatorr
    {
        use Physics ,Triangle;
    }

    $combine= new Calculatorr;
    $combine->add(10,20);
    $combine->circle(20);
?>

<?php
// magic method
// if doesn't exist mehod call , not error show

    class Chemistry
    {
        public function __call ($name, $args)
            {
                echo "Method name doesn't exists";
            }
        static function __callStatic($name,$args)
            {
                echo"Static name doesn't exists";
            }
    }

    $obj=new Chemistry;
    $obj->add();    // Method add doesnt exits
    $obj :: add();  // Method add doesn't exits
?>


<?php
    // invoke() magic method
    // if you run object like a function
    class Bio {
        public function __invoke()
        {
            echo "This is not a function";
        }
    }

    $obj=new Bio;
    $obj(); // This is not a function
?>

<?php
    class English
    {
        private $PI = 3.14 ;

        public function __get($name)
        {
            echo "You can't access $name";
        }

        public function __set($name,$value)
        {
            echo "You Can't set $name with $value";
        }
    }

    $obj= new English;
    echo $obj->PI;  // You can't access PI
    $obj->PI=3.142;// You Can't set PI with 3.142

?>

<?php

    Class Myanmar
    {   
       private  $name="GGWP";
        public function __toString()
        {
            return "$this->name" ;
        }
    }
    $obj=new Myanmar;
    echo $obj; // GG is output class directly as a string
?>