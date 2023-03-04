               # ARRAYS
<?php
    //spread array

    $user =[ 'alice' , '22'];

    list ($name,$age)=$user;

    echo $name;
?>
<?php

    $fruits= ['orange','20'];

    list ($name,$quantity)= $fruits;

    echo $quantity;
    print_r ($fruits);
?>
<?php

    $fruits=[ "name" =>'apple',"quantity"=>'12'];

    ["name"=>$name , "quantity"=>$quantity] = $fruits;

    echo $name;
?>
<?php

    $name="";

    echo $name ? $name : "Unknown"; 

    $name="bobo";

    echo $name ? "walking" : "unknown";

?>

<?php

    $day=date ("D");

    if($day === "sun"){
        echo "Today is sunday";
    }
    else if ($day === "sat"){
        echo "Today is saturday";
    }
    else {
        echo "Today is weekday";
    }
?>
<?php

        $num =[ 1,2,3,-10, 100];

        $i=0;

        $result =0;

        while($i< count ($num)) {
            
                if
                ($num[$i]<0 ) {

                    $i++;
                    continue;
                }
            

            $result += $num [$i];
            $i++;
        }
 
       echo $result; 
?>

<?php  
    $nums=[1,3,4,-1,100];

    $i=0;

    $result=0;

    while ($i < count($nums)){

        if ($nums[$i]<0) break; 
        $result += $nums [$i];
        $i++;
    }
    echo $result;
?>

<?php

    $nums= [1,2,3,-1];

    $i=0;

    $result=0;

    do {
        $result += $nums[$i];

        $i++;
    }

    while ($i<count($nums));


 echo $result; 

 ?>

 <?php

    $num= [1,2,3,4];

    $result=0;

    for
    ( $i=0; $i < count($num); $i++)
    {
        $result += $num[$i];
    }

    echo $result;

?>

<?php

    $num=[1,2,3,4];

    $result=0;

    foreach ( $num as $num) {
        $result += $num;
    }

    echo $result ;
?>

<?php

    #foreach loop from associative array index as a variable
    // care $point variable
    /* $result will be index only */

    $user= ["bob"=>23,"alice"=>22];
    
    $result=[];

    foreach ( $user as $name=> $point ) {

        $result [] = $name;

    }

    print_r ($result);

?>




