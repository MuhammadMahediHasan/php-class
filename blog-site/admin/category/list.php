<?php

    include __DIR__ . '/../common/db-connection.php';

    $categories = mysqli_query($db_connection, "SELECT * FROM categories");
    

?>

<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Category List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Category Create</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            while($category = mysqli_fetch_assoc($categories)) {
                                $i++;
                        ?>
                        <tr>
                            <td><?= $category['name'] ?></td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                    <a href="edit.php?id=<?=$category['id']?>" class="btn btn-sm btn-info">Edit</a>
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
</div>