<?php 
require_once '../../Database/db.php';

session_start();

$email = $_POST['email'];
$pass = $_POST['pass'];

$query = "SELECT COUNT(*) as _count from users  where EMAIL = '$email' and PASSWORD = '$pass'";
$result = mysqli_query($con,$query);
$array = mysqli_fetch_array($result);

if($array['_count'] > 0){
    $query = "SELECT * FROM users WHERE EMAIL = '$email' and PASSWORD = '$pass' ";
    $result = mysqli_query($con, $query);
    $array = mysqli_fetch_array($result);

    $_SESSION['ID'] = $array['ID'];
    $_SESSION['EMAIL'] = $array['EMAIL'];
    $_SESSION['NAME'] = $array['NAME'];


    header("location: ../Dashboard/Dashboard.php");
}
else{
    echo 'Datos incorrectos';
}



?>