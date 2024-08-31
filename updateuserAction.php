<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $Role = $_POST['Role'];
    $password = $_POST['password'];
    $passwordHashed = md5($password);

    // The number of types here should match the number of variables being bound
    $sql = "UPDATE myusers SET FullName = ?, UserName = ?, Email = ?, Role = ?, Password = ? WHERE Id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $fullname, $username, $email, $Role, $passwordHashed, $id);

    if ($stmt->execute()) {
        echo "User updated successfully!";

        // Check if the current logged-in user is the one being updated
        if ($_SESSION['UserName'] == $username) {
            $_SESSION['UserRole'] = $Role; // Update the session role

            // If the role is changed to 'user', redirect to logout or a non-admin page
            if ($Role == 'user') {
                header("Location: logout.php");
                exit();
            }
        }

        header("Location: admin.php");
        exit(); // Add exit() after header() to ensure the script stops executing
    } else {
        echo "Error updating user: " . $conn->error;
    }
} else {
    echo "Invalid request method!";
}
?>
