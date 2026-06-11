<?php
    $monthName = date("F");

    if($monthName){
        echo "the current Month is " . $monthName . ".";
    }else{
        echo "Could not retrive the current month.";
    }
    
?>