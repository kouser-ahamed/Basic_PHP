<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "dummy_db";

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["val1"];
    $age = $_POST["val2"];

    $sql_query = "INSERT INTO users (name, age) VALUES ('$name','$age')";
    $conn->query($sql_query);

    echo "Data Saved Successfully";
}

// <!--CREATE DATABASE IF NOT EXISTS dummy_db;

// USE dummy_db;

// CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100),
//     age INT
// );
// -->
