<?php 
session_start();
include "connection.php";
include 'header.php';

$sql = "SELECT * FROM symptom";
$result = $conn->query($sql);
$symptoms = array();
if ($result->num_rows > 0) {
    $count = 0;
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "name: " . $row["name"] . "\n";
        $symptoms[$count] = $row["name"];
        // echo $_SESSION[$row["name"]];
        $count++;
    }
} else {
    echo "0 results";
}
$diseases = array();
$check = 0;

foreach ($_SESSION as $key => $value) {
    if ($value === 1) {
        $sql = "select disease.name from disease join attached
        on disease_id = disease.id join symptom 
        on symptom_id = symptom.id 
        where symptom.name = '$key';
       ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                // echo $row['name'] . ' ';
                if(isset($diseases[$row['name']])){
                    $diseases[$row['name']] += 1 ;
                } else {
                    $diseases[$row['name']] = 1;
                }
                
            }
        } else {
            echo "0 results";
        }
    }
}

?>

<div id="page-content" class="single-page">
		<div class="container">
			<div id="main-content">
				<div class="row">
					<article class="box-shadow">
						<div class="art-header">

                            <?php
                            foreach($diseases as $key => $value){
                                $sql = "select name , critical , description , treatment from disease where disease.name = '$key';";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) { 
                                   while ($row = $result->fetch_assoc()){
                                       echo "<h3>You may have <i>" . $row['name'] . "</h3></i><br>";
                                       echo "<h4>" . $row['description'] ."</h4><br>";
                                       if($row['critical']===1){
                                           echo "<h4>It's a serious condition you should go to a doctor</h4> <br>";
                                       }else{
                                        echo "<h4>Don't worry it's not a serious condition  </h4><br>";
                                       }
                                       echo "<h3>The treatment : <i>" . $row['treatment'] ."</i></h3>";
                                       echo "<hr>";
                                   }  
                               }
                               else {
                                   echo "0 results";
                               }
                            }
                            
                            session_unset();
                            session_destroy();
                            ?>

                        </div>
					</article>
				</div>
			</div>
		</div>



<?php
include 'footer.php';
?>