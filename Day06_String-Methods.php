<?php

$string = "Your are good at programming. Yes or No ?         ";

$stringOrNot = is_string($string);
if($stringOrNot === true) echo "It's a string!";     // Output >>> It's a string!

echo "<br/>";

$count = strlen($string);
echo $count;    // Output >>> 50

echo "<br/>";

$subString = substr($string, 0, 29);
echo $subString;    // Output >>> Your are good at programming.

echo "<br/>";

$firstPosition = strpos($string, "a");
echo $firstPosition;   // Output >>> 5

echo "<br/>";

$lastPositioned = strrpos($string, "a");
echo $lastPositioned;   // Output >>> 22

echo "<br/>";

$replaced = str_replace("programming", "PHP", $string);
echo $replaced; // Output >>> Your are good at PHP. Yes or No ?

echo "<br/>";

$trimmed = trim($string);
echo $trimmed;  // Output >>> Your are good at programming. Yes or No ?

echo "<br/>";
echo strlen($trimmed);  // Output >>> 41

echo "<br/>";

$lower = strtolower($string);
echo $lower;    // Output >>> your are good at programming. yes or no ?

echo "<br/>";

$upper = strtoupper($string);
echo $upper;    // Output >>> YOUR ARE GOOD AT PROGRAMMING. YES OR NO ?

echo "<br/>";

$capitalize = ucwords($string);
echo $capitalize;   // Output >>> Your Are Good At Programming. Yes Or No ?

echo "<br/>";

$compressed = gzcompress($string);
echo $compressed;   // Output >>> x���/-RH,JUH��OQH,Q((�O/J����K�S�L-V�/R��W�W���e

echo "<br/>";

$unCompressed = gzuncompress($compressed);
echo $unCompressed;    // Output >>> Your are good at programming. Yes or No ?

?>