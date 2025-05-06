<?php

include __DIR__ . '/../common/db-connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


$isStored = mysqli_query($db_connection, "
    INSERT INTO admins (name, email, password) 
    VALUES ('$name', '$email', '$password')"
);

header("location: ../../admin/?page=admin-list");


