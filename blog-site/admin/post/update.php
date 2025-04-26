<?php

include __DIR__ . '/../common/db-connection.php';

$id = $_GET['id'];
$name = time() . '_'.  $_FILES['image']['name'];
$imagePath = '';


$post = mysqli_query($db_connection, "SELECT id,image FROM posts WHERE id = $id");
$post = mysqli_fetch_assoc($post);

if(file_exists('../../storage/' . $post['image'])) {
    unlink('../../storage/' . $post['image']);
}

// if(file_exists("../../storage/posts/$name")) {
//     die("Image already exists!");
// }

$isFileMoved = move_uploaded_file($_FILES['image']['tmp_name'], "../../storage/posts/$name");
if($isFileMoved) {
    $imagePath = "posts/$name";
}

$category_id = $_POST['category_id'];
$title = $_POST['title'];
$description = $_POST['description'];

$isStored = mysqli_query($db_connection, "
    UPDATE posts
    SET category_id = '$category_id', title = '$title', description = '$description', image = '$imagePath'
    WHERE id = $id
");

header("location: ../../admin/?page=post-list");


