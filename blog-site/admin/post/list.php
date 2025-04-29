<?php

    include __DIR__ . '/../common/db-connection.php';

    // inner join
    // left join
    // right join
    // full inner join

    $posts = mysqli_query(
        $db_connection, "
            SELECT posts.*, categories.name as category_name
            FROM posts
            INNER JOIN categories
            ON posts.category_id = categories.id
        ");
    

?>
<!-- Begin Page Content -->

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Post List</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Post Create</a>
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
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            while($post = mysqli_fetch_assoc($posts)) {
                                $i++;
                        ?>
                        <tr>
                            <td><?= $post['category_name'] ?></td>
                            <td><?= $post['title'] ?></td>
                            <td><?= substr($post['description'], 0, 100) ?>...</td>
                            <td>
                                <img style="width: 100px" src="../storage/<?= $post['image'] ?>" alt="Banner">
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                    <a href="?page=edit-post&id=<?=$post['id']?>" class="btn btn-sm btn-info">Edit</a>
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