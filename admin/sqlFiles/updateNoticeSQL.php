<?php
if (isset($_GET["id"]))
    $id = $_GET["id"];

include_once('db.php');

//Code for Signup
if (isset($_POST['title'])) {
    //Getting Post values
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $query = "UPDATE `notice` SET `title`='$title',`description`='$description',`status`='$status' WHERE `id`='$id'";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>window.location.href='../notice.php'</script>";
    } else {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='../notice.php'</script>";
    }
}
