<?php 

include("../../../Database/db.php");
$ID = $_GET['secretId'];
$date = $_POST['DATE'];
$title = $_POST['TITLE'];
$description = $_POST['DESCRIPTION'];
$value = $_POST['VALUE'];


if(!empty($_FILES['PHOTO']['name'])){
    $photo = addslashes(file_get_contents($_FILES['PHOTO']['tmp_name']) );
    $imageProperties = getimageSize($_FILES['PHOTO']['tmp_name']);

    $query = "UPDATE secrets
    SET DATE = '$date', TITLE = '$title', DESCRIPTION = '$description', VALUE = '$value', PHOTO = '$photo', IMAGE_TYPE = '{$imageProperties['mime']}'
    WHERE ID = $ID";

}
else{
    $query = "UPDATE secrets
    SET DATE = '$date', TITLE = '$title', DESCRIPTION = '$description', VALUE = '$value'
    WHERE ID = $ID";
}


if($con->query($query))Header("Location: ../Dashboard.php");
    else echo "ERROR". $query . "<br>". $conn->error;





?>