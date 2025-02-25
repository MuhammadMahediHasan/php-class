<?php

    include "../helpers/helpers.php";

    include "database.php";

    $id = $_GET['id'];

    // Select * from students

    $query = mysqli_query($db_connection, "SELECT * FROM students WHERE id = $id");
    $student = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-12">
                <form action="update.php?id=<?=$student['id']?>" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="<?= $student['name']?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" class="form-control"  value="<?= $student['roll_no']?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control"  value="<?= $student['email']?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="<?= $student['address']?>">
                    </div>
                    <div class="form-group mt-2">
                        <label for="class">Class</label>
                        <input type="text" name="class" id="class" class="form-control" value="<?= $student['class']?>">
                    </div>
                    <button class="mt-3 btn btn-success">
                        Update
                    </button>
                    <a href="index.php" class="mt-3 btn btn-default">
                        Back
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>