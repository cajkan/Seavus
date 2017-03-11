<?php
    $name = "Mitko";
    $prezime = "Janeski";
    $age = "32";
    
    $title = "Server Title";
    $description = "server description";

    // Default value $var3, if we don't send third parameter it will display default
    function normalizestring($var1, $var2, $var3 = 25){
        $var1 = strtolower($var1);
        $var2 = strtolower($var2);
        $var3 = (int)$var3;
        
        echo "$var1 $var2 $var3";
    }
    
    normalizestring($name, $prezime);
    
    // We change the value of the variable and return without function return
    // This will make the code faster 
    function capitalize(&$name, &$info){
        $name = strtoupper($name);
        $info = ucfirst($info);
    }
    
    capitalize($title, $description);
    echo "$title $description";
    
    echo "<br>";
    
    $i = 1;
    while($i <= 20){
        if(($i % 2) == 0){
            echo "Paren $i <br>";
        }
        else{
            echo "Neparen $i <br>";
        }
    }
?>