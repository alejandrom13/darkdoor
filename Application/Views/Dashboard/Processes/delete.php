<?php 

include("../../../Database/db.php");
$SECRET_ID = $_GET['secretId'];

$query = "DELETE FROM secrets WHERE ID = $SECRET_ID";
$result = mysqli_query($con, $query);

if($con->query($query))Header("Location: ../Dashboard.php");
    else echo "ERROR". $query . "<br>". $conn->error;


?>