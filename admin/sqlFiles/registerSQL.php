<?php
include_once('db.php');

//Code for Signup
if (isset($_POST['email'])) {
    //Getting Post values
    $name = $_POST['username'];
    $email = $_POST['email'];
    $loginpass = md5($_POST['password']); // Password is encrypted using MD5

    $query = "SELECT * FROM users WHERE `useremail` = '$email' and `password` = '$loginpass'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 0) {
        $query = "INSERT INTO `users`(`username`, `useremail`, `password`) VALUES ('$name','$email','$loginpass')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script>window.location.href='../login.php'</script>";
        } else {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    } else {
        echo "<script>alert('Email id already assicated with another account');</script>";
        echo "<script>window.location.href='../login.php'</script>";
    }
}
