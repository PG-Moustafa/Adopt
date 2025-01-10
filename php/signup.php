<?php
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 
    
   
    $check_email_sql = "SELECT * FROM users WHERE email='$email'";
    $check_email_result = $conn->query($check_email_sql);
    
    if ($check_email_result->num_rows > 0) {
       
        echo "<script>alert('Email already exists. Please choose a different email.'); window.location='../Pages/signup.html';</script>";
        exit;
    } else {
    
        $insert_sql = "INSERT INTO users (name,email, password) VALUES ('$name', '$email', '$password')";
        
        if ($conn->query($insert_sql) === TRUE) {
            echo "<script>alert('You have successfully registered. Redirecting you to the login page.'); window.location='../Pages/signin.html';</script>";
            exit;
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>

