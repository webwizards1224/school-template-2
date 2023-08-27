<?php
    $con = mysqli_connect("localhost","root","","ssvehs_DB");

    // $con = mysqli_connect("localhost","tugdeals_siddhi","tugdeals_bigvacancy@123","tugdeals_bigvacancy");

    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
