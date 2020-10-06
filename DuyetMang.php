<?php

$cars = array("Volvo", "BMW", "Toyota");
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}

$cars = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

for ($row = 0; $row < 4; $row++) {
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $cars[$row][$col] . "</li>";
    }
    echo "</ul>";
}
