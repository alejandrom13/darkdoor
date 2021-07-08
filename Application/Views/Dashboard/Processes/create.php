<?php 
include("../../../Database/db.php");
session_start();
$ID = $_SESSION['ID'];
$date = $_POST['DATE'];
$title = $_POST['TITLE'];
$description = $_POST['DESCRIPTION'];
$value = $_POST['VALUE'];
$photo = addslashes(file_get_contents($_FILES['PHOTO']['tmp_name']) );
$imageProperties = getimageSize($_FILES['PHOTO']['tmp_name']);

print("<pre>".print_r($_POST, true). "</pre>");
print("<pre>".print_r($_FILES['PHOTO'], true). "</pre>");

$query = "INSERT INTO secrets (DATE, TITLE, DESCRIPTION, VALUE, PHOTO, IMAGE_TYPE, USER_ID)
            VALUES('$date', '$title', '$description', '$value', '$photo', '{$imageProperties['mime']}', $ID)";

if (mysqli_query($con, $query)){
    echo 'New record added';
    header("Location: ../Dashboard.php");
}
else{
    ECHO "NOT WORKING,". $query . "<br>" . mysqli_error($con);
}

?>