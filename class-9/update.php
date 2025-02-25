<?php

session_start();

include "database.php";

$student = $_POST;

$id = $_GET['id'];

$name = $_POST['name'];
$roll = $_POST['roll'];
$email = $_POST['email'];
$class = $_POST['class'];
$address = $_POST['address'];

$result = mysqli_query(
    $db_connection,
    "UPDATE students SET name = '$name', roll_no = '$roll', email = '$email', class = '$class', address = '$address' WHERE id = $id"
);

if($result) {
    $_SESSION['is_updated'] = true;

    header("Location: index.php");
}
