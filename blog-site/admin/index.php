<?php

    session_start();

    $isVerified = array_key_exists('auth', $_SESSION);

    if(!$isVerified) {
        header('location: auth/login.php');
    }


?>

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

                            case 'create-post':
                                include_once './post/create.php';
                                break;

                            case 'edit-post':
                                include_once './post/edit.php';
                                break;
    
                            case 'post-list':
                                include_once './post/list.php';
                                break;

                            case 'create-post':
                                include_once './post/create.php';
                                break;

                            case 'edit-post':
                                include_once './post/edit.php';
                                break;
    
                            case 'post-list':
                                include_once './post/list.php';
                                break;

                            case 'create-admin':
                                include_once './admin/create.php';
                                break;

                            case 'edit-admin':
                                include_once './admin/edit.php';
                                break;
    
                            case 'admin-list':
                                include_once './admin/list.php';
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



    <?php 
        include_once './layouts/script-assets.php';
    ?>

</body>

</html>