<?php
session_start();
include("connect.php");

if (isset($_POST['id'])) {
    $userID = $_POST['id'];
    
    // Perform delete operation (adjust as per your database schema)
    $sql = "DELETE FROM myusers WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userID);
    $stmt->execute();
    session_destroy();
    $stmt->close();
    // Redirect back to admin page after deletion
    header("Location: index.php");
    exit();
} else {
    echo "<script>alert('Error deleting user');</script>";
    // Handle invalid requests or redirects
    header("Location: admin.php");
    exit();
}
?>
