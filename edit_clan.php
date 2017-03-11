<?php
    session_start();
    $errors = array();

    $inputs = array(
        "Clan Name" => $_POST['clanname'],
        "Clan Description" => $_POST['clan-info'],
    );
    
    foreach($inputs as $input => $data){
        if(empty($data)){
            $errors[] = "You are missing $input";
        }
        elseif($data < 3){
            $errors[] = "Your $input should be more than 3 characters";
        }
    }
    
    if(empty($errors)){
        echo "DO SOME GOOD CODE";
    }
    
    $_SESSION['errors'] = $errors;
    header("location: forms.php");
?>

