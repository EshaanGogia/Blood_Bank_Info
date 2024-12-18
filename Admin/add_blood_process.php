<?php
session_start();
include 'db.php';

if (isset($_POST['addblood'])) {
    $blood_group = $_POST['blood_group'];
    $hospital_name = $_POST['hospital_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO blood_info (blood_group, hospital_name, phone, address)
            VALUES ('$blood_group', '$hospital_name', '$phone', '$address')";

    if ($con->query($sql)) {
        $_SESSION['success'] = "Blood Added Successfully";
        header("Location: dash.php");
    } else {
        $_SESSION['success'] = "Blood not added: " . $con->error;
    }

    // Redirect back to the add blood form page
    header("Location: dash.php");
    exit();
}
