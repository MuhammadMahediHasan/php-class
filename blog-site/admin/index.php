<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
        include_once './layouts/head-assets.php';
    ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        <?php 
            include_once './layouts/sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php 
                    include_once './layouts/navbar.php';
                ?>

                <?php
                    
                    if(array_key_exists('page', $_GET)) {

                        switch($_GET['page']) {
                            case 'create-category':
                                include_once './category/create.php';
                                break;
    
                            case 'category-list':
                                include_once './category/list.php';
                                break;
    
                            default:
                            include_once './dashboard.php';
    
                        }
                    } else {
                        include_once './dashboard.php';
                    }
                ?>

            </div>
            <!-- End of Main Content -->

            <?php 
                include_once './layouts/footer.php';
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <?php 
        include_once './layouts/script-assets.php';
    ?>

</body>

</html>