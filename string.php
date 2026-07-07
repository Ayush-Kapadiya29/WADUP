<?php

    $name = "Ayush Kapadiya";
    echo "My name is :-" . $name . "\n\n";
    echo "<br>";

    
    $length = strlen($name);
    echo "The length of the string is " . $length . " chars.\n";
    echo "<br>";

    $searchWord = "Welcome";
    $Sentence = "Welcome to PHP programming!";
    $position = strpos($Sentence, $searchWord);
    echo "The word " . $searchWord . " starts at position " . $position . ".\n";
    echo "<br>";

    $wordCount = str_word_count($Sentence);
    echo "The string contains " . $wordCount . " words.\n";
    echo "<br>";

    $reversed = strrev($Sentence);
    echo "Replaced backwards: \"" . $reversed . "\"\n";
    echo "<br>";

    $uppar = "LOWERCASE STRING"; 
    $lowercase = strtolower($uppar);
    echo " $lowercase  \n";
    echo "<br>";

    $lower = "uppercase string"; 
    $lowercase = strtoupper($lower);
    echo " $lowercase  \n";
    echo "<br>";

    
?>