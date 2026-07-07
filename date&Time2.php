<?php
date_default_timezone_set("Asia/Kolkata");

// Current date and time
$datetime = date("Y-m-d H:i:s");

echo "Current Date & Time: " . $datetime . "<br><br>";

// HOUR
echo "HOUR: " . date("H") . "<br>";

// MINUTE
echo "MINUTE: " . date("i") . "<br>";

// SECOND
echo "SECOND: " . date("s") . "<br>";

// DATE_FORMAT
echo "DATE_FORMAT (dd-mm-yyyy): " . date("d-m-Y") . "<br>";
?>