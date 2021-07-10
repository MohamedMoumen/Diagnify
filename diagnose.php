<?php include 'header.php'; ?>

<?php


include "connection.php";

$sql = "SELECT * FROM symptom";
$result = $conn->query($sql);
$symptoms = array();
if ($result->num_rows > 0) {
    $count = 0;
  // output data of each row
  while($row = $result->fetch_assoc()) {
   // echo "name: " . $row["name"] . "\n";
    $symptoms[$count] = $row["name"];
    $count++;
  }
   //echo $arr[0];
} else {
  echo "0 results";
}
?>





<div class="container">

    <?php
        $tmp = 0;
        while($tmp > sizeof($symptoms)){
            echo "<h1> Do you have: " . $symptoms[$tmp];
            
            $tmp++;
        }
    ?>

    <button>Next</button>
<!-- <h1>Do you have:  </h1>
<form action="diagnose.php" name="symptom" method="POST">

  <div class="form-group">
    <input type="radio" name="Yes" id="Yes">
    <label for="Yes"><h3> Yes</h3></label><br>
  </div>
  <div class="form-check">
    <input type="radio" name="No">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br> -->

</div>




<?php
include 'footer.php';
?>