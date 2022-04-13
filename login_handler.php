<?php

session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'edge_gm_system');

$userEmail = $_POST["email"];
$userPassword = $_POST["password"];

$query = "SELECT `id`, `email`, `password` FROM `users`  WHERE email='$userEmail' and password='$userPassword'";

$result = mysqli_query($con, $query);

$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['email'] = $userEmail;
    header('location:dashboard.php');
} else {
    header('location:index.php');
}

?>
