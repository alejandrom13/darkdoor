<?php 
require_once '../../Database/db.php';

$name = $_POST['NAME'];
$email = $_POST['EMAIL'];
$pass = $_POST['PASS'];

$query = "INSERT INTO users (NAME, EMAIL, PASSWORD) VALUES('$name', '$email', '$pass')";

if (mysqli_query($con, $query)){
    echo 'Cuenta creada exitosamente!';
}
else{
    ECHO "algo anda mal!,". $query . "<br>" . mysqli_error($con);
}



?>