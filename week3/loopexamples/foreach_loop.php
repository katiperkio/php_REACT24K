<?php
$colors = array("red", "blue", "green", "yellow");

/* This is the regular loop to go through array. count tells the length of the array.
for($i = 0; $i < count($colors); $i++) {
    print $colors[$i] . "\n";
}*/

/* This is a simpler version. For each item in "$colors", we know them as "$color" (one at a time).
The weakness of this version is that you can't change the values (changing $color variable does nothing). */
foreach($colors as $color) {
    print $color . "\n";
}
?>