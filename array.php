<?php
    echo "Numeric array is :" ;
    $number = array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
    print_r($number);

    echo"<br><br><hr>";
    echo "Assosiative array is :" ;
    $name = array(
        "jan" => 31,
        "feb" => 28
    );
    print_r($name);

    echo"<br><br><hr>";
    echo "Assosiative array is :" ;
    $laptop = array(
        "HP" => array(
            "Modal"=>"Victus",
            "price"=>15000
        )
    );

    print_r($laptop);
?>