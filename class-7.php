<?php

    include "./helpers/helpers.php";

    $students = [
        [
            'name' => 'John Doe',
            'roll' => '101',
            'email' => 'john.doe@example.com',
            'address' => '123 Main St, New York, NY',
            'class' => '10A'
        ],
        [
            'name' => 'Jane Smith',
            'roll' => '102',
            'email' => 'jane.smith@example.com',
            'address' => '456 Elm St, Los Angeles, CA',
            'class' => '10B'
        ],
        [
            'name' => 'Michael Johnson',
            'roll' => '103',
            'email' => 'michael.j@example.com',
            'address' => '789 Oak St, Chicago, IL',
            'class' => '11A'
        ],
        [
            'name' => 'Emily Brown',
            'roll' => '104',
            'email' => 'emily.b@example.com',
            'address' => '101 Pine St, Houston, TX',
            'class' => '11B'
        ],
        [
            'name' => 'David Wilson',
            'roll' => '105',
            'email' => 'david.w@example.com',
            'address' => '222 Maple St, San Francisco, CA',
            'class' => '12A'
        ],
    ];

    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $storage = "./data.json";

        // get all stored students
        $oldStudents = file_get_contents($storage);

        // Convert json to php array
        $data = json_decode($oldStudents, true);

        $formData = $_POST;

        // merge old and new student.
        array_push($data, $formData);
        // $data[] = $formData

        // PHP array to json conversion
        $allStudents = json_encode($data, JSON_PRETTY_PRINT);

        // saved to storage.
        file_put_contents($storage, $allStudents);
    }
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
                <form action="" method="POST">
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
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            for($i = 0; $i < count($students); $i++) {
                                
                        ?>
                        <tr>
                            <td> <?= $students[$i]['name'] ?> </td>
                            <td> <?= $students[$i]['roll'] ?> </td>
                            <td> <?= $students[$i]['email'] ?> </td>
                            <td> <?= $students[$i]['address'] ?> </td>
                            <td> <?= $students[$i]['class'] ?> </td>
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