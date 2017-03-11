<?php
    session_start();
    
    
    $problems = isset($_SESSION['errors']) && !empty($_SESSION['errors']) ? $_SESSION['errors'] : array();
    
    if(isset($_SESSION) && !empty($_SESSION['errors'])){
        $problems = $_SESSION['errors'];
    }
    else{
        $problems = array();
    }
?>
<html>
    <head>
        <title>Formi</title>
    </head>
    <body>
        <form action="edit_clan.php" method="POST">
            <input type="text" name="clanname" placeholder="Clan Name">
            <br>
            Clan Info:
            <br>
            <textarea name="clan-info"></textarea>
            <br>
            <input type="submit" value="Edit Clan">
        </form>
        
        <?php
            foreach($problems as $errors){
                echo $errors;
            }
        ?>
    </body>
</html>
<?php
    unset($_SESSION['errors']);
?>
