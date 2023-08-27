<?php
ob_start();
// needs to be added here
?>
<?php session_start();

include_once('db.php');
//Code for login
if (isset($_POST['email'])) {
    $uname = $_POST['email'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM users WHERE `useremail` = '$uname' and `password` = '$password'";
    $result = mysqli_query($con, $query);

    if ($result) {
        while ($rows = $result->fetch_assoc()){
            $uid = $rows["id"];
        $uname = $rows["username"];

        $_SESSION['uid'] = $uid;
        $_SESSION['uname'] = $uname;
        }
        header('Location: ../dashboard.php');
    } else {

        echo "<script>alert('Invalid Details');</script>";
    }
}
