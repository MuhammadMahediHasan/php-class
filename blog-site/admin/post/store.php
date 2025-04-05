<?php

include __DIR__ . '/../common/db-connection.php';

$name =  $_FILES['image']['name'];
$imagePath = '';

$isFileMoved = move_uploaded_file($_FILES['image']['tmp_name'], "../../storage/posts/$name");

if(file_exists("../../storage/posts/$name")) {
    die("Image already exists!");
}

if($isFileMoved) {
    $imagePath = "posts/$name";
}

$category_id = $_POST['category_id'];
$title = $_POST['title'];
$description = $_POST['description'];

$isStored = mysqli_query($db_connection, "
    INSERT INTO posts (category_id,  title, description, image) 
    VALUES ('$category_id', '$title', '$description', '$imagePath')"
);

header("location: ../../admin/?page=create-post");


