<?php
session_start();
include 'db.php'; // Include the database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get the ID and ensure it's an integer

    // Delete query
    $query = "DELETE FROM blood_info WHERE id = $id";
    $query_run = mysqli_query($con, $query); // Use $conn from db.php

    if ($query_run) {
        $_SESSION['message'] = "Record deleted successfully!";
    } else {
        $_SESSION['message'] = "Failed to delete record: " . mysqli_error($con);
    }
} else {
    $_SESSION['message'] = "No ID specified for deletion.";
}

// Redirect back to the admin dashboard
header("Location: dash.php");
exit;
?>
