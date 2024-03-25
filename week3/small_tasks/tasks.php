<?php

// while loop task 1

$i = 1;
$a = [];

while ($i < 100) {
    if ($i % 2 === 0) {
        $i ++;
        continue;
    } else {
        array_push($a, $i);
        $i ++;
        continue;
    }
};

foreach ($a as $b) {
    echo $b . " ";
};

echo PHP_EOL; // line break

// while loop task 2

$i = 2;

while ($i < 50) {
    echo $i . " ";
    echo (100 - $i) . " ";
    $i +=2;
};

echo PHP_EOL; // line break

// while loop task 3 is in read_from_file.php

// for loop task 1

$a = [];

for ($i = 1; $i < 100; $i++) {
    if ($i % 2 === 0) {
        array_push($a, $i);
        continue;
    } else {
        continue;
    }
};

foreach ($a as $b) {
    echo $b . " ";
};

echo PHP_EOL; // line break

// for loop task 2

$number1 = 3;
$number2 = 7;
$result = 0;

for ($i = 3; $i <= $number2; $i++) {
    if ($i == $number2) { // extra challenge part
        echo $number1 . " = ";
        $result += $number1;
        break;
    }
    echo $number1 . " + ";
    $result += $number1;
    $number1 ++;
};

echo $result;

echo PHP_EOL; // line break

// for loop task 3

$rows = 5;

for ($i = 1; $i <= $rows; $i++) { // outer loop iterates through each row
    for ($stars = 1; $stars <= $i; $stars++) { // inner loop prints '*' for each column in the current row
        echo "* ";
    }
    echo "\n"; // line break after completing a row
}

// foreach loop task 1

$shopping_list = array("Apples", "Milk", "Bread", "Eggs", "Chicken");

foreach ($shopping_list as $item) {
    echo "- " . $item . "\n";
}

// foreach loop task 2

$countries_and_capitals = array(
    "United States" => "Washington, D.C.",
    "United Kingdom" => "London",
    "France" => "Paris",
    "Germany" => "Berlin",
    "Italy" => "Rome",
    "Canada" => "Ottawa",
    "Japan" => "Tokyo",
    "Australia" => "Canberra",
    "Brazil" => "Brasília",
    "India" => "New Delhi"
);

foreach ($countries_and_capitals as $country => $capital) {
    echo "The capital of " . $country . " is " . $capital . "\n";

};

// foreach loop task 3

$fruits = array("Apple", "Banana", "Poisonous Berry", "Strawberry", "Grapes");

echo "Today we will eat..." . " \n";

foreach ($fruits as $fruit) {
    if (str_contains($fruit, 'poisonous') || str_contains($fruit, 'Poisonous')) { // extra challenge
        echo "Hold on a minute! " . $fruit . " is dangerous!";
        break;
    }
    echo $fruit . "...\n";
}