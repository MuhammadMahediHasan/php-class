<?php

    session_start();

    include __DIR__ . '/../common/db-connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($db_connection, "SELECT * FROM admins WHERE email = '$email'");
    $admin = mysqli_fetch_assoc($query);

    if($query && $query->num_rows) {

        if(password_verify($password, $admin['password'])) {
            
            $_SESSION['auth'] = [
                'name' => $admin['name'],
                'email' => $admin['email'],
            ];

            header('location: ../index.php');
        }

    } else {
        echo "Admin not found!";
    }