<?php

require 'connection.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO USER (name, email, passsword) VALUES('$name', '$email', '$password')";

    if (mysqli_query($conn, $query)) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $query . mysqli_error($conn);
    }

}


?>