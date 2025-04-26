<!-- Begin Page Content -->
<?php 
    include __DIR__ . '/../common/db-connection.php';

    $id = $_GET['id'];
    $categories = mysqli_query($db_connection, "SELECT * FROM categories");
    $post = mysqli_query($db_connection, "SELECT * FROM posts WHERE id = $id");
    $post = mysqli_fetch_assoc($post);

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Post</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Post List</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Post</h6>
        </div>
        <div class="card-body">
            <form action="post/update.php?id=<?=$post['id']?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control form-control-sm" id="category_id" name="category_id">
                        <option value="">Select</option>
                        <?php
                            while($category = mysqli_fetch_assoc($categories)) {
                            
                                $isSelected = $category['id'] == $post['category_id'];
                        ?>
                            <option
                                <?= $isSelected ? 'selected' : '' ?> 
                                value="<?= $category['id']?>">
                                    <?= $category['name']?>
                            </option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Title" value="<?=$post['title']?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description">
                        <?=$post['description']?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control form-control-sm" id="image" name="image">
                </div>

                <div class="mb-2">
                    <img src="<?= '../storage/' . $post['image'] ?>" width="20%" />
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-success">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>