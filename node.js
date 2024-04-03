// Undefined variable
console.log(undefinedVariable);

// Division by zero
const number = 10;
const result = number / 0;

// Unused variable
const unusedVariable = "This variable is not used";

// Missing semicolon
console.log("Hello world")

// Incorrect array usage
const array = [1, 2, 3];
console.log(array[3]);

// Infinite loop
while (true) {
    // Do something
}

// SQL injection vulnerability
const userInput = req.query.username;
const query = "SELECT * FROM users WHERE username = '" + userInput + "'";

// Unreachable code
console.log("This line will never be reached");
return;

// Incorrect function call
function myFunction(param1, param2) {
    // Do something
}
myFunction(1);

// Incorrect array declaration
const anotherArray = [1, 2, 3];
const arraySize = anotherArray.length;
for (let i = 0; i <= arraySize; i++) {
    console.log(anotherArray[i]);
}

// Use of deprecated function
const fs = require('fs');
fs.existsSync('file.txt');

// Error suppression
try {
    // Some operation that might throw an error
} catch (error) {
    // Ignore the error
}

// Resource leak
const stream = fs.createReadStream('file.txt');

// Type mismatch
const stringNumber = "10";
const additionResult = stringNumber + 5;

// Incorrect comparison
if (result = 5) {
    console.log("Result is 5");
}

// Use of unescaped output
const userInput2 = req.query.input;
console.log("<div>" + userInput2 + "</div>");
