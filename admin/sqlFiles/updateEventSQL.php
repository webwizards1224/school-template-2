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

    // File upload path
    $targetDir = "../assets/events-banners/";
    $fileName = basename($_FILES["file"]["name"]);
    $create_datetime = date("Y-m-d");
    $targetFilePath = $targetDir . $create_datetime . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        $allowTypes = ['jpg', 'png', 'jpeg'];
        if (in_array($fileType, $allowTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $query = "UPDATE `events` SET `title`='$title',`description`='$description', `image`='" . $create_datetime . $fileName . "',`status`='$status' WHERE `id`='$id'";
                $result = mysqli_query($con, $query);
                if ($result) {
                    echo "<script type='text/javascript'> alert('The file " .
                        $fileName .
                        " has been updated successfully.'); </script>";
                    echo "<script>window.location.href='../events.php'</script>";
                } else {
                    echo "<script type='text/javascript'> alert('File upload failed, please try again.'); </script>";
                    echo "<script type='text/javascript'> document.location = '../events.php'; </script>";
                }
            } else {
                echo "<script type='text/javascript'> alert('Sorry, there was an error uploading your file.'); </script>";
                echo "<script type='text/javascript'> document.location = '../events.php'; </script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Sorry, only PDF files are allowed to upload.'); </script>";
            echo "<script type='text/javascript'> document.location = '../events.php'; </script>";
        }
    } else {
        echo "<script type='text/javascript'> alert('Please select a file to upload.'); </script>";
        echo "<script type='text/javascript'> document.location = '../events.php'; </script>";
    }
}
