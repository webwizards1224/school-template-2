<?php
include_once('db.php');

//Code for Signup
if (isset($_POST['title'])) {
    //Getting Post values
    $title = $_POST['title'];
    $date = $_POST['date'];
    $status = $_POST['status'];

    $query = "INSERT INTO `holidays`(`title`, `date`, `status`) VALUES ('$title','$date','$status')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>window.location.href='../holidays.php'</script>";
    } else {
        echo "<script>window.location.href='../holidays.php'</script>";
        echo "<script>alert('Something went wrong. Please try again');</script>";
    }
}
