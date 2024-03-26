<?php

include ('includes/db_connection.php');
include ('includes/header.php');



if (isset ($_POST['save_student'])) {
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    // print_r($_FILES["profile"]);
    // foreach ($_POST as $key => $value) {
    //     echo "$key: $value<br>";
    // }
    // $gender = $_POST["gender-selection"];


    if (!empty ($_FILES["profile"])) {
        $tmpFileName = $_FILES["profile"]['tmp_name'];
        $fileName = $_FILES['profile']['name'];
        $targetDir = "uploads/";

        $fileExtension = explode('.', $fileName);
        $fileActualExtension = strtolower(end($fileExtension));
        $newFileName = uniqid('', true) . "." . $fileActualExtension;
        $targetFilePath = 'uploads/' . $newFileName;

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');

        if (in_array($fileActualExtension, $allowTypes)) {

            if (move_uploaded_file($tmpFileName, $targetFilePath)) {

            } else {
                print_r('error move image');
            }
            $query = "INSERT INTO `student`( `first_name`, `last_name`, `gender`, `profile`, `enroll_date`) VALUES ('$fName','$lName','Male','$newFileName','2023-04-04')";

            $conn->query($query);
            $conn->close();
            header("Location: student.php?success");
            // Insert image file name into database
            // $conn->query("INSERT INTO images (file_name, uploaded_on) VALUES ('" . $fileName . "', NOW())");


        } else {
            print_r('Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.');
        }
    } else {
        print_r('error');
    }

    // $query = "INSERT INTO `student`( `first_name`, `last_name`, `gender`, `profile`, `enroll_date`) VALUES ('$fName','$lName','Male','$fileName','2023-04-04')";

    // $conn->query($query);
    // $conn->close();


}