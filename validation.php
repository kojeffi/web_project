<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'edge_cm_system');
if (isset($_POST["btn_Add"])){
    $userFullname = $_POST["fullname"];
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $userContact = $_POST["contactno"];

    $query = "SELECT `id`, `fullname`, `email`, `password`, `contactno` FROM `users` WHERE email='$userEmail' and password='$userPassword'";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $_SESSION['email'] = $userEmail;
        header('location:dashboard.php');
    } else {
        header('location:login.php');
    }
}
?>