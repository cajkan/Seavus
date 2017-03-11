<?php
    // EXTRA USEFUL FUNCTIONS
    
    //Check if variable is set or not
    isset($var);

    // Formating Numbers
    number_format(400000);
    
    // Result will be 4
    ceil(3.6);
    
    // Result will be 3
    round(3.1);
    
    // Parni/Neparni broevi
    $number = rand(10,100);
    switch($number%2){
        case 0:
        echo "Broj $number e paren broj";
        break;
    
        case 1:
        echo "Brojot $number e neparen broj";
        break;
    }
    
    // Host OS Version 
    echo PHP_OS;
    
    echo date("d, m, Y H:i:s");
    echo $_SERVER['SERVER_NAME'];
    
    // SECURITY
    
    // Removes slashes \ from variable
    stripslashes($var);
    
    // Normalize string
    strtolower($var);
    ucfirst($var);
?>