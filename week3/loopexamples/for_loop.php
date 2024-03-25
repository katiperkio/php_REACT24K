<?php
$i = 1;
while($i <= 10) {
    print $i . "\n";
    $i++;
}
/*
HOW TO TURN WHILE LOOP INTO FOR LOOP:
1. Move the initialization ($i = 1;) inside the brackets (regular, not the curly ones) of for loop
2. Move the condition ($i <= 10) after initilization. Add semicolon (;)
3. Move changing the counter variable ($i++;) after the condition. Remove semicolon.
*/

for($i = 1; $i <= 10; $i++) {
    print $i . "\n";
}
