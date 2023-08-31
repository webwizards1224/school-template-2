<?php
include_once('db.php');

//Code for Signup
if (isset($_POST['title'])) {
    //Getting Post values
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $query = "INSERT INTO `notice`(`title`, `description`, `status`) VALUES ('$title','$description','$status')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>window.location.href='../notice.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='../notice.php'</script>";
    }
}
