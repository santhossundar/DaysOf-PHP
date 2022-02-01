<?php

// Comments

// Single line comemnts
# Single line comments

/* Multi 
line 
comments
*/

echo 'Text 01';     // Output >>> Text 01

echo '<br/>';

print 'Text 02';    // Output >>> Text 02

echo '<br/>';

// Data types

$varInteger = 1999;
$varFloat = 100.0;
$varString = 'Hello!';
$varBoolean = true;
$varNull = NULL;

// Arrays

$varIndexedArray = array(1,2,3,4,5);

print_r($varIndexedArray);      // Output >>> Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

echo '<br/>';

$varAssociativeArray = array("Name" => "Jhon", "Age" => 23);

print_r($varAssociativeArray);      // Output >>> Array ( [Name] => Jhon [Age] => 23 )

echo '<br/>';

$tempArr = array();

$tempArr[0] = "Jhon";
$tempArr[1] = "Jack";
$tempArr[2] = "Messi";

print_r($tempArr);      // Output >>> Array ( [0] => Jhon [1] => Jack [2] => Messi )

echo '<br/>';

$tempArr2 = array();

$tempArr2["StdNo"] = "1001";
$tempArr2["Name"] = "Jack";
$tempArr2["Age"] = "23";

print_r($tempArr2);      // Output >>> Array ( [StdNo] => 1001 [Name] => Jack [Age] => 23 )

echo '<br/>';

// Constants

define('PI', 3.14);

echo PI;        // Output >>> 3.14

echo '<br/>';

define('STRING', 'Case Insensitive', true);

echo string;     // Output >>> Case Insensitive