<?php
$date = "2026-07-07";

echo "Date: " . $date . "<br><br>";

echo "DAYOFWEEK: " . date("w", strtotime($date)) + 1 . "<br>";

echo "WEEKDAY: " . date("N", strtotime($date)) . "<br>";

echo "DAYOFMONTH: " . date("d", strtotime($date)) . "<br>";

echo "DAYOFYEAR: " . date("z", strtotime($date)) + 1 . "<br>";

echo "DAYNAME: " . date("l", strtotime($date));
?>