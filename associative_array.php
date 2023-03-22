<?php

// An associative array is similar to an 
// indexed array, but you can use string values 
// for array keys.


// how associative array is defined 
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];


// Alternatively, you can use the following syntax as well.
$employee = [];
$employee['name']  = 'John';
$employee['email']  = 'John@gmail.com';
$employee['phone']  = '123456789';


// how to print the associative array element
echo "The name of the employee is " . $employee['name'] . "<br>";


// printing all the elements in the associative array
foreach ($employee as $key => $value) {
    echo $key  . ':' . $value . "<br>";
}
