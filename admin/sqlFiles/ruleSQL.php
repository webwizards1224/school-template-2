<?php
include_once('db.php');

//Code for Signup
if (isset($_POST['rule'])) {
    //Getting Post values
    $title = $_POST['rule'];
    $status = $_POST['status'];

    $query = "INSERT INTO `rules`(`title`, `status`) VALUES ('$title','$status')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>window.location.href='../rules.php'</script>";
    } else {
        echo "<script>window.location.href='../rules.php'</script>";
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}
