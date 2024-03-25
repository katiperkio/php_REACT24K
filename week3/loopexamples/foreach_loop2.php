<?php
$student_grades = array(
    "Alice" => 85,
    "Bob" => 90,
    "Charlie" => 75,
    "David" => 88
);

/* Not that different from the other foreach loop. Instead of just the value, we want to know the key too.
You can give them whatever names you like. */
foreach($student_grades as $student => $grade) {
    print "$student: $grade\n";
}
?>