<?php 
session_start();
include 'header.php'; 
?>

<?php

include "connection.php";
$display1 = "inline";
$display2 = "none";

$sql = "SELECT * FROM symptom";
$result = $conn->query($sql);
$symptoms = array();
$count = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "name: " . $row["name"] . "\n";
        $symptoms[$count] = $row["name"];
        $count++;
    }
} else {
    echo "0 results";
}

if($count == $_SESSION["counter"]){
    $display1 = "none";
    $display2 = "inline";
} else {
    
    if($_POST["choice"] === "Yes") {
        $_SESSION[$symptoms[$_SESSION["counter"] - 1]] = 1;
    } 

}

?>


<div class="container">

    
    <form id="questions" action="temp.php" method="POST" style="display: <?php echo $display1 ?>">
        <h1 id="show">Do you have: <?php echo $symptoms[$_SESSION["counter"]++]?></h1>
          <input type="radio" id="Yes" name="choice" value="Yes" required>
          <label for="Yes">Yes</label><br>
          <input type="radio" id="No" name="choice" value="No" required>
          <label for="No">No</label><br>
        <button id="next" class="btn btn-primary">Next</button>
    </form> 
    
    <br><br>

    <a href="results.php" class="btn btn-primary btn-lg btn-block" style="display: <?php echo $display2 ?>;">Show results</a>
    <br><br><br>

    

</div>

<?php
include 'footer.php';
?>