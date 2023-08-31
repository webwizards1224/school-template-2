<?php
if (isset($_GET["id"]))
    $id = $_GET["id"];

include_once('db.php');

$query = "DELETE FROM `events` WHERE `id`='$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>window.location.href='../events.php'</script>";
} else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='../events.php'</script>";
}
