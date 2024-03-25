<?php
/* The basic while loop counting from one to ten. */
$i = 1;
while($i <= 10) {
    // we don't like five, so we skip it (continue starts the next round)
    if($i == 5) {
        $i++;
        continue;
    }

    // we like 8 even less, so let's end the whole loop with break
    if($i == 8) {
        break;
    }
    print $i . "\n";
    $i++;
}

print "\n\n";

/* The same in reverse, from ten to one. */
$j = 10;
while($j >= 1) {
    print $j . "\n";
    $j--;
}