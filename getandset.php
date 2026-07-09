<?php


$name = "15.75 meters";
echo "Initial value: " . $name . "<br>";

$initialType = gettype($name);
echo "Initial type: " . $initialType . "<br><br>"; 


if (settype($name, "float")) {
    echo "--- Successfully converted to float ---<br>";
    echo "New value: " . $name . "<br>";
    echo "New type: " . gettype($name) . "<br><br>"; 
}


if (settype($name, "integer")) {
    echo "--- Successfully converted to integer ---<br>";
    echo "New value: " . $name . "<br>"; 
    echo "New type: " . gettype($name) . "<br><br>"; 
}


if (settype($variable, "boolean")) {
    echo "--- Successfully converted to boolean ---<br>";
    echo "New value: " . ($name ? 'true' : 'false') . "<br>"; 
    echo "New type: " . gettype($name) . "<br>"; 
}
?>