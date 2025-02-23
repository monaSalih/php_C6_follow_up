<?php

// Variables & Data Types
// String // Integer // Float // Boolean
$name = "John Doe";  
$age = 25;           // Integer
$price = 9.99;       // Float
$isActive = true;    // Boolean

// Conditional Statements (if, switch)
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

$day = "Monday";
switch ($day) {
    case "Monday":
        echo "It's the start of the week!<br>";
        break;
    case "Friday":
        echo "Weekend is coming!<br>";
        break;
    default:
        echo "It's just another day.<br>";
}

// Loops: for, while, do-while
// Counting using a for loop:
echo "Counting using a for loop:<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}
echo "<br>";
// Counting using a while loop
echo "Counting using a while loop:<br>";
$i = 1;
while ($i <= 5) {
    echo "$i ";
    $i++;
}
echo "<br>";
// Counting using a do-while loop
echo "Counting using a do-while loop:<br>";
$i = 1;
do {
    echo "$i ";
    $i++;
} while ($i <= 5);
echo "<br>";



// Generic Functions with Return Values & Parameters
function addNumbers($a, $b) {
    return $a + $b;
}

$result = addNumbers(5, 10);
echo "<br>The sum of 5 and 10 is: " . $result . "<br>";

// fizz buzz function
// fabonaciee sequence function


?>