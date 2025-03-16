<!-- Begin Page Content -->
<?php 

    include __DIR__ . '/../common/db-connection.php';
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Category List</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Category</h6>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="form-control form-control-sm" id="description" name="description" placeholder="Description"> </textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-success">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>