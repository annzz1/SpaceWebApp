<?php
session_start();

include 'connect.php';

if(isset($_POST['signUp'])){
    $fullName = $_POST['fullName'];
    $UserName = $_POST['UName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $role = $_POST['role'];
    $passwordHashed = md5($password);
    $confirmpasswordHashed = md5($confirmpassword);
    //ფაილის ჩამატება
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];    
    $destination_folder = 'C:/xampp/htdocs/xampwebproject/images/' . $file_name; 
    //ფაილის ჩამატება
    $errors = [];

    $checkEmail = "SELECT * FROM myUsers WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        $errors[] = "Email Address Already Exists!";
    }

    $checkUserName = "SELECT * FROM myUsers WHERE userName='$UserName'";
    $checkUserNameresult = $conn->query($checkUserName);
    if ($checkUserNameresult->num_rows > 0) {
        $errors[] = "UserName Already Exists!";
    }
    
    if (strlen($password) < 4) {
        $errors[] = "Password must be at least 4 characters";
    }

    if (!preg_match("/[a-z]/i", $password)) {
        $errors[] = "Password must contain at least one letter";
    }

    if (!preg_match("/[0-9]/", $password)) {
        $errors[] = "Password must contain at least one number";
    }

    if ($password !== $confirmpassword) {
        $errors[] = "Passwords must match";
    }

    if (empty($role)) {
        $errors[] = "Role is required";
    }
   

    // ფაილის იგივე  იმიჯ ფოლდერში ჩამატება
    if (move_uploaded_file($tempname, $destination_folder)) {
        echo "File moved successfully.";
    } else {
        $errors[]= "Failed to move file.";
    }
    //დასასრული
  
    if (empty($errors)) {
        $insertQuery = "INSERT INTO myUsers(fullName, userName, email, password, role, File)
                        VALUES ('$fullName', '$UserName', '$email', '$passwordHashed', '$role', '$file_name')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: register-successful.php");
            exit();
        } else {
            $errors[] = "Error: " . $conn->error;
        }
    }
    

    $_SESSION['errors'] = $errors;
    $_SESSION['formData'] = $_POST;
    header("location: registration.php");
    exit();
}
?>
