<?php

// Undefined variable
echo $undefinedVariable;

// Division by zero
$number = 10;
$result = $number / 0;

// Unused variable
$unusedVariable = "This variable is not used";

// Missing semicolon
echo "Hello world"

// Incorrect array usage
$array = [1, 2, 3];
echo $array[3];

// Infinite loop
while (true) {
    // Do something
}

// SQL injection vulnerability
$userInput = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '$userInput'";

// Unreachable code
echo "This line will never be reached";
return;

// Incorrect function call
function myFunction($param1, $param2) {
    // Do something
}
myFunction(1);

// Incorrect array declaration
$array = [1, 2, 3];
$arraySize = count($array);
for ($i = 0; $i <= $arraySize; $i++) {
    echo $array[$i];
}

// Use of deprecated function
mysql_connect('localhost', 'root', 'password');

// Error suppression
@$undefinedVariable;

// Resource leak
$file = fopen('example.txt', 'r');

// Type mismatch
$number = "10";
$result = $number + 5;

// Incorrect comparison
if ($result = 5) {
    echo "Result is 5";
}

// Use of unescaped output
$userInput = $_GET['input'];
echo "<div>$userInput</div>";

?>
