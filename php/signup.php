<?php

require 'connection.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "INSERT INTO USER VALUES($name, $email, $password)";
    mysqli_query($conn, $query);


}


?>