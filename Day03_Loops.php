<?php

// For loop

for($i = 0; $i < 10; $i++){
    echo $i;
    echo " ";
}

// Output >>> 0 1 2 3 4 5 6 7 8 9

echo "<br/><br/>";

// While loop 

$i = 5;

while($i<10){
    echo $i;
    echo " ";
    $i++;
}

// Output >>> 5 6 7 8 9

echo "<br/><br/>";

// Do while loop

$i = 0;

do {
    echo $i;
    echo " ";
    $i++;

} while($i<=10);

// Output >>> 0 1 2 3 4 5 6 7 8 9 10

echo "<br/><br/>";

// For each loop

$stdData = array("std0001" => "Jhon", "std0002" => "Jack", "std0003" => "James");

foreach($stdData as $std){
    echo $std;
    echo "<br/>";
}

/*
Output >>> 
Jhon
Jack
James
*/

echo "<br/>";

$stdData = array("std0001" => "Jhon", "std0002" => "Jack", "std0003" => "James");

foreach($stdData as $std => $name){
    echo $std." : ".$name;
    echo "<br/>";
}

/*
Output >>> 
std0001 : Jhon
std0002 : Jack
std0003 : James
*/

?>