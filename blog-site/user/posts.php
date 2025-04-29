<?php

include '../admin/common/db-connection.php';
include '../admin/common/functions.php';

$categoryId = $_GET['category_id'];

$categoryQuery = mysqli_query($db_connection, "SELECT name, description FROM categories WHERE id = $categoryId");
$category = mysqli_fetch_assoc($categoryQuery);


$posts = mysqli_query($db_connection, "SELECT * FROM posts WHERE category_id = $categoryId ORDER BY created_at DESC");


?>
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder"><?= $category['name'] ?></h1>
            <p class="lead mb-0"><?= $category['description'] ?></p>
        </div>
    </div>
</header>

<div class="container">

        <div class="row">
            <?php
                while($post = mysqli_fetch_assoc($posts)):
            ?>
            
            <div class="col-lg-6">
                <!-- Blog post-->
                <div class="card mb-4">
                <a href="#!">
                    <img class="card-img-top" src="<?= '../storage/' . $post['image'] ?>" alt="..." />
                </a>
                <div class="card-body">
                        <div class="small text-muted">
                            <?= dateFormatter($post['created_at']) ?>
                        </div>
                        <h2 class="card-title h4">
                            <?= $post['title'] ?>
                        </h2>
                        <p class="card-text">
                            <?= substr($post['description'], 0, 250) ?> ...
                        </p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
            ?>
        </div>
</div>