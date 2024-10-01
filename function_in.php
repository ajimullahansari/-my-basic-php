<?php
//----syntax-----
//function function_name(){}


//function greet(){
//    echo"Welcome to Youtube channel A.N.T Squre Tech";
//}
//greet();



//$name = "Ajimullah Ansari";
//function force(){
//    echo "This is the fantastic trick";
//}
//force($name);


//$car = array(
//    0=>'car1',
//    1=>'car2',
//    2=>'car3',
//    3=>'car4',
//    4=>'car5',
//    5=>'car6'
//);
//if(is_array($car)){
//    echo"car is an array";
//}
//else{
//    echo"car is not an array";
//}
//


$cars = array(
        0=>'car1',
        1=>'car2',
        2=>'car3',
        3=>'car4',
        4=>'car5',
        5=>'car6'
    );


//echo array_search('car7',$cars);
//print_r(array_slice($car,3));


//$chucked = array_chunk($cars,3);
//print_r($chucked);


//$poped = array_pop($cars);
//echo ($poped);
//


array_push($cars,'car7');
print_r($cars);
print_r(array_keys($cars));
var_dump(array_key_exists('c',$cars));
echo count($cars);
print_r(array_count_values($cars));










?>