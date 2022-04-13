<?php
        session_start();
        header('location:login.php');
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'edge_cm_system');


    $userFullname = $_POST["fullname"];
    $userEmail = $_POST["email"];
    $userPassword = $_POST["password"];
    $userContact = $_POST["contactno"];

    $query = "SELECT `id`, `fullname`, `email`, `password`, `contactno` FROM `users` WHERE fullname='$userFullname',
email='$userEmail',password='$userPassword' and contactno='$userContact'";

    $result = mysqli_query($con, $query);

    $num = mysqli_num_rows($result);
    if ($num == 1) {
        echo "Username Already Taken";
    } else {
        $reg = " INSERT INTO `users`(`id`, `fullname`, `email`, `password`, `contactno`) VALUES (null,'$userFullname',
        '$userEmail','$userPassword','$userContact')";
        mysqli_query($con, $reg);
        echo "Registration Successful";
}
?>
