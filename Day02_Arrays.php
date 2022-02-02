<?php

// Indexed Arrays

$fruits = array("mango", "banana", "Apple");

echo $fruits[1];        // Output >>> banana

echo "<br/>";

$numbers = array(100, 20, 10, 500);

echo $numbers[3];       // Output >>> 500

echo "<br/>";

// Size of an Array

$array_size = count($numbers);

echo "Size of numbers array: ", $array_size;        // Output >>> Size of the numbers array: 4

echo "<br/>";

// When we don't know about the size of an array

$numbers[] = 30;

echo "Size of numbers array: ", count($numbers);        // Output >>> Size of the numbers array: 5

echo "<br/>";

echo $numbers[4];       // Output >>> 30

echo "<br/>";

echo $numbers[] = 1000;       // Output >>> 1000

echo "<br/>";

// Printing the array 

print_r($numbers);      // Output >>> Array ( [0] => 100 [1] => 20 [2] => 10 [3] => 500 [4] => 30 [5] => 1000 )

// Printing the array elements using for loop

for($i=0; $i<count($numbers); $i++){
    echo $i;
    echo " ";
}

// Output >>> 0 1 2 3 4 5

echo "<br/>";

// Getting variable information of an array elements

var_dump($numbers);     // Output >>> array(6) { [0]=> int(100) [1]=> int(20) [2]=> int(10) [3]=> int(500) [4]=> int(30) [5]=> int(1000) }

echo "<br/>";

// Associative Arrays

$std_info = array("std0001" => "Jhon", "std0002" => "Dany", "std0003" => "Mark");

echo $std_info["std0003"];      // Output >>> Mark

echo "<br/>";

print_r($std_info);      // Output >>> Array ( [std0001] => Jhon [std0002] => Dany [std0003] => Mark )

echo "<br/>";

var_dump($std_info);         // Output >>> array(3) { ["std0001"]=> string(4) "Jhon" ["std0002"]=> string(4) "Dany" ["std0003"]=> string(4) "Mark" }

echo "<br/>";

// Multi-Dimensional Arrays

$num_elem = array(array(1, 2, 3, 4, 5, 6));

echo $num_elem[0][2];       // Output >>>  3

echo "<br/>";

$std_data = array(array("std001" => "CSE", "std002" => "IT"));

echo $std_data[0]["std001"];        // Output >>> CSE

echo "<br/>";

$sample_arr1 = array(array(array(1, 2, 3, 4, 5, 6)));

echo $sample_arr1[0][0][2];        // Output >>> 3

echo "<br/>";

print_r($sample_arr1);      // Output >>> Array ( [0] => Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 ) ) )

echo "<br/>";

$sample_arr2 = array(1, array(1, 2), array(1, 2, 3));

echo $sample_arr2[2][2];        // Output >>> 3

echo "<br/>";

print_r($sample_arr2);      // Output >>> Array ( [0] => 1 [1] => Array ( [0] => 1 [1] => 2 ) [2] => Array ( [0] => 1 [1] => 2 [2] => 3 ) )

echo "<br/>";

$sample_arr3 = array(1, array(1, array(1, 2, array(1, 2, 3))));

echo $sample_arr3[1][1][2][2];        // Output >>> 3

echo "<br/>";

print_r($sample_arr3);      // Output >>> Array ( [0] => 1 [1] => Array ( [0] => 1 [1] => Array ( [0] => 1 [1] => 2 [2] => Array ( [0] => 1 [1] => 2 [2] => 3 ) ) ) )


?>
