<?php
    
    // Zadaca 1
    $countries = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
    
    echo "<select>";
    foreach($countries as $state => $city){
        echo "<option>$state - $city</option>";
    }
    echo "</select>";
    
    // Zadaca 2
    
    $color = array ( 
        "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
	"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
	"holes" => array ( "First", 5 => "Second", "Third")
    );
    
    echo $color["holes"][5];
    echo $color["color"]["a"];