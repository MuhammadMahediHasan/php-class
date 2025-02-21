<?php

    include "../helpers/helpers.php";

    include "database.php";

    $students = mysqli_query($db_connection, "SELECT * FROM students");
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
                <form action="store.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="roll">Roll</label>
                        <input type="number" name="roll" id="roll" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="class">Class</label>
                        <input type="text" name="class" id="class" class="form-control">
                    </div>
                    <button class="mt-3 btn btn-success">
                        Submit
                    </button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            while($student = mysqli_fetch_assoc($students)) {
                                $i++;
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $student['name'] ?></td>
                            <td><?= $student['roll_no'] ?></td>
                            <td><?= $student['email'] ?></td>
                            <td><?= $student['address'] ?></td>
                            <td><?= $student['class'] ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                    <button class="btn btn-sm btn-info">Edit</button>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>