<?php 
session_start();
include "connection.php";

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
print_r($diseases);



session_unset();
session_destroy();


// {
//     dis1 : 3,
//     dis2 : 2,
//     dis3 : 1
// }