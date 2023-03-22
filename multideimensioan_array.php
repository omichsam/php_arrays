<?php
// declaring multidimensional array

$employee = [
    'name' => 'John',
    'email' => 'John@google.com',
    'phone' =>  '1234567890',
    'hobbies' => ['Football', 'Tennis'],
    'profiles' => ['facebook' => 'johnfb', 'twitter' => 'johntw']
];

// foreach ($employee as $key => $value) {
//     echo $key . ':' . $value . "<br>";
// }

echo "hobbies <br> 1 : ";
echo $employee['hobbies'][0];
echo "\t  \t\t <br>2 : \t";
echo $employee['hobbies'][1] . "<br>";




echo "<hr br>" . "the data for profile is facebook \t";
echo $employee['profiles']['facebook'];
echo "and tritter is \t";
echo $employee['profiles']['twitter'];
