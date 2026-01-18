<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost", "root", "", "task2_db");

if (!$conn) {
    die("Database connection failed");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email, password)
            VALUES ('$name', '$email', '123456')";

    if (mysqli_query($conn, $sql)) {
        echo "<h2>Data inserted successfully</h2>";
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<a href='index.html'>Go Back</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
