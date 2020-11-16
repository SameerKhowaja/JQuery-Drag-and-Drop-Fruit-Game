<?php
    include("config.php");

    $name = "";
    $lvl = "";
    $score = "";
    if(isset($_REQUEST["name"])){
        $name = $_REQUEST['name'];
        $lvl = $_REQUEST['lvl'];
        $score = $_REQUEST['scr'];
        //echo $name.$lvl.$score;

        $query = "INSERT INTO `score`(`f_name`, `f_level`, `f_score`) VALUES ('$name', '$lvl', '$score')";
        if(mysqli_query($conn, $query)){
            echo "<h2 align='center'>Records added successfully</h2>";
            echo "<h3 align='center'>Name: ".$name." -- Level: ".$lvl." -- Score: ".$score."</h3>";
        } else{
            echo "<h2 align='center'>ERROR: Could not able to execute $sql. " . mysqli_error($link) . "</h2>";
        }
    }
        
?>