<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "dummy_db";

$conn = mysqli_connect($host, $username, $password, $database);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["val1"];

    $sql_query = "SELECT id, name, age FROM users WHERE name = '$name'";
    $result = $conn->query($sql_query);

    while ($row = $result->fetch_assoc()) {
        echo "Name : " . $row["name"] . "<br>";
        echo "Age : " . $row["age"] . "<br>";
        echo "---------------------------<br>";
    }
}


// <!--CREATE DATABASE IF NOT EXISTS dummy_db;

// USE dummy_db;

// CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(100),
//     age INT
// );
// -->
