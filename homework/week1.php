<?php
    
    // Zadaca 1
    define("DEBUG", true);
    
    if(DEBUG === true){
        ini_set('display_errors', true);
    }
    else{
        ini_set('display_errors', false);
    }
    // Test DEBUG
    //echo qweweqw;
    
    // Zadaca 2
    $month = "August";
    $date = date('F', time());
    if($date == $month){
        echo "It's $month, so it's really hot";
    }
    else{
        echo "Not $month, so at least not in the peak of the heat";
    }
    
    echo "<br>";
    
    // Zadaca 3
    $broj = 4;
    $number = 2;
    $count = 99;
    
    function large_value($var1, $var2, $var3){
        if(($var1 > $var2) && ($var1 > $var3)){
            return $var1;
        }
        elseif(($var2 > $var1) && ($var2 > $var3)){
            return $var2;
        }
        else{
            return $var3;
        }
    }
    
    echo "Number " . large_value($broj, $number, $count) . " is highest number in the list";
    
    // Zadaca 4
    $number = rand(1,100);
    $number2 = rand(1,100);
    
    function divide($broj, $broj2){
        if(($broj % 5) == 0 && ($broj % 11) == 0){
            echo "This number $broj is divisible by 5 and 11";
        }
        elseif($broj2 % 5 && $broj2 % 11 == 0){
            echo "This number $broj2 is divisible by 5 and 11";
        }
        else{
            echo "Numbers $broj $broj2 are not divisible, sorry about that";
        }
    }
    echo "<br>";
    divide($number, $number2);
    
    // Zadaca 5
    $i = 200;
    while($i <= 250){
        if(($i % 40 == 0)){
            echo $i . "<br>";
        }
        $i++;
    }
    
    