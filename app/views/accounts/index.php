<?php require APPROOT . '/views/inc/header_inner.php'; ?>



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                   <nav class="navbar-custom">

                     <?php require APPROOT . '/views/inc/inner_nav.php'; ?>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard  <!-- <?php echo $row["name"]; ?> --></h4>
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item active">Welcome to Highdmin admin panel !</li> -->
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Manage Tickets</h4>

                                    <div class="text-center mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-custom bg-custom text-white">
                                                    <i class="fi-tag"></i>
                                                    <h3 class="m-b-10">25563</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-primary widget-flat border-primary text-white">
                                                    <i class="fi-archive"></i>
                                                    <h3 class="m-b-10">6952</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box widget-flat border-success bg-success text-white">
                                                    <i class="fi-help"></i>
                                                    <h3 class="m-b-10">18361</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-sm-3">
                                                <div class="card-box bg-danger widget-flat border-danger text-white">
                                                    <i class="fi-delete"></i>
                                                    <h3 class="m-b-10">250</h3>
                                                    <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                   
                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                

<?php require APPROOT . '/views/inc/footer_inner.php'; ?>