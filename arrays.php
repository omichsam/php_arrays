<?php



// initializing array
$array = array();
// also
$arrayd = [];

// how to add elements to an array

$array_s = [];
$array_s[] = 'One';
$array_s[] = 'Two';
$array_s[] = 'Three';
$array_s[] = 'Four';
$array_s[] = 'Five';
$array_s[] = 'Six';
$array_s[] = 'Seven';
$array_s[] = 'Eight';
$array_s[] = 'Nine';
$array_s[] = 'Ten';

// printing out the array
print_r($array_s);

// how to access the array element 
echo "<hr>";
echo $array_s[0];
echo "<hr>";
echo $array_s[1];
echo "<hr>";
echo $array_s[2];
echo "<hr>";


// looping through the array to print all the array elements

foreach ($array_s as $element) {
    echo $element;
    echo "<br>";
}


// getting the array length
$array_length = count($array_s);
echo "The count of the array is " . $array_length . "<hr>";

// using length of an array to print all the elements in the array

for ($i = 0; $i < $array_length; $i++) {
    echo $array_s[$i] . "\t";
}




echo "<br><br><br><br><hr>";

$array_fruits = array('apple', 'oranges', 'Watermelon', 'Mango', 'Pineapple', 'Citrus');
var_dump($array_fruits);

echo "<hr>";
print_r($array_fruits);
// print($array_fruits);
