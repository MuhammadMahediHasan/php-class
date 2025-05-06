<!-- Begin Page Content -->
<?php 

    include __DIR__ . '/../common/db-connection.php';
?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Admin</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Admin List</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create Admin</h6>
        </div>
        <div class="card-body">
            <form action="admin/store.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="Email">
                </div>

                <div class="form-group">
                    <button class="btn btn-sm btn-success">Submit</button>
                </div>
                
            </form>
        </div>
    </div>
</div>