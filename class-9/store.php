<?php

include "database.php";

$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$class = $_POST['class'];
$address = $_POST['address'];

$result = mysqli_query(
    $db_connection,
    "INSERT INTO students (name, roll_no, email, class, address) VALUES ('$name', '$roll', '$email', '$class', '$address')"
);

if($result) {
    echo "Student information successfully stored";

    header("Location: index.php");
}