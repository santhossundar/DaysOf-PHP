<?php

// If condition

$grade = 75;

if($grade >= 50){
    echo "You are pass ...";
} else {
    echo "Try again ...";
}

/*
Output >>>
You are pass ...
*/

echo "<br/>";

// Nested if condition

$grade = 80;

if($grade > 75){
    echo "You've got A";
} else if($grade > 60) {
    echo "You've got B";
} else if($grade > 50){
    echo "You've got C";
} else if($grade >40){
    echo "You've got S";
} else {
    echo "You've failed ...";
}

/*
Output >>>
You've got A
*/

echo "<br/>";

$grade = 75;

if($grade > 50){
    if($grade > 75){
        echo "You've got A";
    } else {
        echo "You've passed ...";
    }
} else {
    echo "You've failed ...";
}

/*
Output >>>
You've passed ...
*/

echo "<br/><br/>";


// Switch

$fruit = 'Mango';

switch($fruit){
    case 'Apple':
        echo 'Your favorite fruit is apple';    
    case 'Mango':
        echo 'Your favorite fruit is mango';    
    case 'Banana':
        echo 'Your favorite fruit is banana';    
    default:
        echo 'Your favorite fruit is something else ...';
}

echo "<br/><br/>";

/*
Output >>>
Your favorite fruit is mangoYour favorite fruit is bananaYour favorite fruit is something else ...
*/

switch($fruit){
    case 'Apple':
        echo 'Your favorite fruit is apple';
        break;
    case 'Mango':
        echo 'Your favorite fruit is mango';
        break;
    case 'Banana':
        echo 'Your favorite fruit is banana';
        break;
    default:
        echo 'Your favorite fruit is something else ...';
}

/*
Output >>>
Your favorite fruit is mango
*/

echo "<br/><br/>";


// Comparisons

$num = 30;

if($num == 30) echo 'Equal'; else echo 'Not equal';

// Output >>> Equal

echo "<br/>";

if($num != 30) echo 'Equal'; else echo 'Not equal';

// Output >>> Not equal

echo "<br/>";

if($num <> 30) echo 'Equal'; else echo 'Not equal';

// Output >>> Not equal

echo "<br/>";

if($num >= 30) echo 'Greater than 30'; else echo 'Not greater than 30';

// Output >>> Greater than 30

echo "<br/>";

if($num <= 30) echo 'Less than or equal to 30'; else echo 'Not less than nor equal to 30';

// Output >>> Less than or equal to 30

echo "<br/>";

if($num > 30) echo 'Greater than 30'; else echo 'Not greater than 30';

// Output >>> Not greater than 30

echo "<br/>";

if($num < 30) echo 'Less than 30'; else echo 'Not less than 30';

// Output >>> Not less than 30

echo "<br/><br/>";


// Strict operators

if($num === 30) echo 'Equal and same data type'; else echo 'Not equal nor same data type';

// Output >>> Equal and same data type

echo "<br/>";

if($num !== 30) echo 'Not equal nor same data type'; else echo 'Equal and same data type';

// Output >>> Equal and same data type

echo "<br/>";

if('5' == 5) echo 'true'; else echo 'false';

// Output >>> true

echo "<br/>";

if('5' === 5) echo 'true'; else echo 'false';

// Output >>> false

echo "<br/><br/>";


// Logical operators

if($num > 10 AND $num < 50) echo 'Number is greater than 10 and less than 50'; else echo 'Number is not greater than 10 or not less than 50';

// Output >>> Number is greater than 10 and less than 50

echo "<br/>";

if($num < 10 OR $num > 50) echo 'Number is less than 10 or greater than 50'; else echo 'Number is not less than 10 nor greater than 50';

// Output >>> Number is not less than 10 nor greater than 50

echo "<br/>";

if($num > 10 XOR $num === 50) echo 'Number is greater than 10 but not equal to 50'; else echo 'Number is greater than 10 and equal to 50 or number is less than 10 and not equal to 50';

// Output >>> Number is greater than 10 but not equal to 50

echo "<br/>";

?>