<!-- Begin Page Content -->
<?php 
    include __DIR__ . '/../common/db-connection.php';

    $categories = mysqli_query($db_connection, "SELECT * FROM categories");
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Post</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Post List</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
        </div>
        <div class="card-body">
            <form action="post/store.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control form-control-sm" id="category_id" name="category_id">
                        <option value="">Select</option>
                        <?php
                            while($category = mysqli_fetch_assoc($categories)) {
                        ?>
                            <option value="<?= $category['id']?>"><?= $category['name']?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description"> </textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control form-control-sm" id="image" name="image">
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-success">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>