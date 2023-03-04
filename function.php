<?php
function add ($a,$b) {
    echo $a + $b;
}
add(1,0);
?>
<?php
    function greet($a,$b){
        echo $a."" ."".$b;
    }
    greet("Hello","PHP")
?>
<?php

    function greeet($a,$b="meme"){
        echo $a.$b;
    }
    greeet("hello","PHP");
?>

<?php
    function meme($a,$b="meow"){
        echo $a.$b;
    }
    meme("wook");
?>

<?php
    function aadd($a, $b){
        return $a+$b;
    }
    $result= aadd(1,3);

    echo aadd(1,3);
?>

<?php
    // rest parameter 
    // eg. $b value are 2,3,4 

    function aaadd($a , ...$b) {
       print_r ($a);
    }

    aaadd(1,2,3,4,5);
?>

<?php
    // type hinting 
    // with parameter
    function price (int|float $n)
    {
        return "price is \$ $n";
    }

    echo price (3.1);
    echo price (3);
?>

<?php
    // function expression
    // use statement

    $name= "Alice";
    $hello = function() use ($name){
    echo "Hello $name";
   };
   $hello (); // hello allice
?>

<?php
    $name="Alice";
    $hello= function() use ($name){
        $name="bob";
        echo "hello $name";
    };
    $hello();
    echo $name;
?>

<?php

    // arrow function in php

    $two = fn ($n) => $n *3;
    echo $two(2);
?>

<?php
    // arrow function can call global variable directly

    $x=3;

    $add= fn($y) => $x+$y;

    echo $add(3);
?>

<?php
    // Named Arguments

    function profile( $name,$email,$age) {
        echo "$name @ $email ($age)";
    }

    profile ("alice","alice@gmail.com",22);
?>
