<?php

    include '../admin/common/db-connection.php';
    include '../admin/common/functions.php';

    $latestPostQuery = mysqli_query($db_connection, "SELECT * FROM posts ORDER BY created_at DESC;");
    $categories = mysqli_query($db_connection, "SELECT name, id FROM categories");

    // 10
    // 9
    // 8

    $latest = mysqli_fetch_assoc($latestPostQuery);
?>

<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="<?= '../storage/' . $latest['image'] ?>" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted"><?= dateFormatter($latest['created_at']) ?> </div>
                    <h2 class="card-title">
                        <?= $latest['title'] ?>
                    </h2>
                    <p class="card-text">
                        <?= substr($latest['description'], 0, 250) ?> ...
                    </p>
                    <a class="btn btn-primary" href="#!">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <?php
                    while($post = mysqli_fetch_assoc($latestPostQuery)) {
                ?>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="<?= '../storage/' . $post['image'] ?>" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"><?= dateFormatter($post['created_at']) ?></div>
                            <h2 class="card-title h4"><?=$post['title']?></h2>
                            <p class="card-text">
                                <?= substr($post['description'], 0, 150) ?> ...    
                            </p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>

                <?php
                
                    }
                ?>
                
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <?php
                            $categories = mysqli_fetch_all($categories);
                            $chunkData = array_chunk($categories, 2);

                            for($i = 0; $i <  count($chunkData); $i++) {
                                $categories = $chunkData[$i];

                            }
                            
                            foreach($chunkData as $i => $categories) :
                        ?>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">

                                <?php
                                    foreach($categories as $category) :
                                ?>

                                <li>
                                    <a href="?page=category-posts&category_id=<?= $category[1] ?>">
                                        <?= $category[0] ?>
                                    </a>
                                </li>
                                <?php
                                    endforeach;
                                ?>
                            </ul>
                        </div>

                        <?php
                            endforeach;
                        ?>


                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    </div>
</div>