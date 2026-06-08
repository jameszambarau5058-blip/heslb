<?php

$conn = new mysqli("localhost", "root", "", "school_db");

if ($conn->connect_error) {
    die("Connection failed");
}

$name = $_POST['student_name'];
$course = $_POST['course'];

$sql = "INSERT INTO students (student_name, course)
VALUES ('$name', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Data saved successfully";
} else {
    echo "Error";
}

$conn->close();

?>