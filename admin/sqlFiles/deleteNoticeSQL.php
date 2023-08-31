<?php
if (isset($_GET["id"]))
    $id = $_GET["id"];

include_once('db.php');

$query = "DELETE FROM `notice` WHERE `id`='$id'";
$result = mysqli_query($con, $query);

if ($result) {
    echo "<script>window.location.href='../notice.php'</script>";
} else {
    echo "<script>alert('Something went wrong. Please try again');</script>";
    echo "<script>window.location.href='../notice.php'</script>";
}
