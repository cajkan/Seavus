<?php 
    $errors = array();
    $total_price = "";
    include_once("week3.php");
    
    if(isset($_POST['submit'])){
        if(empty($_POST['km'])){
            $errors['km'] = "Kilometers is required";
        }
        if(empty($_POST['liters'])){
            $errors['liters'] = "Liters per 100km is required";
        }
        if(empty($_POST['price'])){
            $errors['price'] = "Price per Liter is required";
        }
        if(is_numeric($_POST['km']) && is_numeric($_POST['liters']) && is_numeric($_POST['price'])){
            if(empty($errors)){
                $km = $_POST['km'];
                $liters = $_POST['liters'];
                $price = $_POST['price'];
                
                $total_price = trip_cal($km, $liters, $price);
            }
        }
    }
?>
<form method="POST">
    <label for="km">Kilometers:</label>
    <input type="text" id="km" name="km">
    <br>
    <label for="liters">Liters per 100km:</label>
    <input type="text" id="liters" name="liters">
    <br>
    <label for="price">Price per liter (in denars):</label>
    <input type="text" id="price" name="price">
    <br>
    <input type="submit" value="Calculate" name="submit">
</form>
<?php echo !empty($total_price) ? "The price for the trip will be $total_price denars." : ""; ?>
<?php 
    if(isset($errors) && !empty($errors)){
        foreach($errors as $error){
            echo $error . "<br>";
        }
    }
?>