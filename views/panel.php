<?php session_start(); ?>
<?php include 'header.php';?>
<?php include 'sidebar.php';?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                <?php if(isset($_SESSION['primernombre'])){
                                    echo "Bienvenido ".$_SESSION['primernombre'];
                                }else
                                    echo "Inicio";
                                ?>
                            </h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                        <div class="container-fluid">
                            <!-- /.row -->
                            <?php (!isset($_SESSION['primernombre'])) ? include 'login.php': include 'logout.php'; ?> 
                        </div>
                        <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
<?php include 'footer.php'; ?>