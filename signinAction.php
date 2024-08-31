<?php
session_start(); 

include 'connect.php';

if(isset($_POST['signIn'])){
   $UserName = $_POST['UName'];
   $password = $_POST['password'];
   $passwordHashed = md5($password);

   $errors = [];

   $sql = "SELECT * FROM myusers WHERE UserName='$UserName' AND password='$passwordHashed'";
   $result = $conn->query($sql);
   
   if($result->num_rows > 0){
      $row = $result->fetch_assoc();
      $_SESSION['UserName'] = $row['UserName'];
      $_SESSION['UserRole'] = $row['Role'];
      header("Location: index.php");
      exit();
   }else{
      $errors[] = "Incorrect Username or Password";
   }

   $_SESSION['errors'] = $errors;
   $_SESSION['formData'] = $_POST;
   header("Location: login.php");
   exit();
}
?>
