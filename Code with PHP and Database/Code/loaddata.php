<?php
    include("config.php");

    if(isset($_REQUEST["name"])){
        $query = "SELECT `f_name`, `f_level`, `f_score` FROM `score`";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            echo "<table style='border: 1px solid black;border-collapse: collapse;width:50%;margin-left:auto;margin-right: auto;'>";
            echo "<tr style='background-color: #419D78'><th>Name</th><th>Level</th><th>Score</th><tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr style='background-color:  rgb(160, 160, 247)'><td>" . $row["f_name"]. "</td><td>" . $row["f_level"]. "</td><td>" . $row["f_score"]. "</td></tr>";
            }
            echo "</table>";
        } else{
            echo "<h2 align='center'>0 results</h2>";
        }

    }

?>