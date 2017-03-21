<?php include("header.php"); ?>

<ul>
    <li><a href="index.php?query=about">About</a></li>
    <li><a href="index.php?query=contact">Contact Us</a></li>
</ul>

<?php
    if(isset($_GET['query']) && !empty($_GET['query'])){
        $query = isset($_GET['query']) ? $_GET['query'] : "";
        if($query == "about"){
            include("about.php");
        }
        elseif($query == "contact"){
            include("contact.php");
        }
    }
?>
<?php include("footer.php"); ?>