<?php
session_start();
if (!isset($_SESSION['uname']) && !isset($_SESSION['uid'])) {
    header("Location: login.php");
    exit();
} 