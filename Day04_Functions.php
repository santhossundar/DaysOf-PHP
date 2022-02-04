<?php

function myFunction(){
    echo "Hello World ...";
}

myFunction();   // Output >>> Hello World ...

echo "<br/>";

function addFive(){
    return 5;
}

function addTen(){
    return 10;
}

$num = addFive() + addTen();

echo $num;  // Output >>> 15

echo "<br/>";

function printName($name){
    echo $name;
}

printName("Jhon");  // Output >>> Jhon

echo "<br/>";

function stdInfo($name, $age){
    echo $name." : ".$age;
}

stdInfo("James", 23);    // Output >>> James : 23

?>