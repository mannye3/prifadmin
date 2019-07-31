<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
         <title><?php echo SITENAME; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo URLROOT; ?>/assets/images/edit4.png">

      

        <!-- DataTables -->
        <link href="<?php echo URLROOT; ?>/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo URLROOT; ?>/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Multi Item Selection examples -->
        <link href="<?php echo URLROOT; ?>/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--venobox lightbox-->
        <link rel="stylesheet" href="<?php echo URLROOT; ?>/plugins/magnific-popup/css/magnific-popup.css"/>


         <!-- Summernote css -->
        <link href="<?php echo URLROOT; ?>/plugins/summernote/summernote-bs4.css" rel="stylesheet" />


          <!-- Bootstrap fileupload css -->
        <link href="<?php echo URLROOT; ?>/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- Dropzone css -->
        <link href="<?php echo URLROOT; ?>/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?php echo URLROOT; ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo URLROOT; ?>/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="<?php echo URLROOT; ?>/assets/js/modernizr.min.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">


    </head>


    <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                   <!--  <div class="topbar-left">
                        <a href="#" class="logo">
                            <span>
                                <img src="assets/images/edit3.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div> -->

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="<?php echo URLROOT; ?>/assets/images/3002121059.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#"><!-- <?php echo $row["name"]; ?> --></a> </h5>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                               <a href="<?php echo URLROOT; ?>/accounts/index">
                                    <i class="fi-air-play"></i> <span> Dashboard </span>
                                </a>
                            </li>

                             <li>
                                <a href="<?php echo URLROOT; ?>/accounts/properties">
                                    <i class="fa fa-home"></i> <span>Properties </span>
                                </a>
                            </li>


                             <li>
                                <a href="<?php echo URLROOT; ?>/accounts/users">
                                    <i class="fa fa-users"></i> <span> Users </span>
                                </a>
                            </li>


                             <li>
                                <a href="<?php echo URLROOT; ?>/accounts/agents">
                                    <i class="fa fa-users"></i> <span> Agents </span>
                                </a>
                            </li>


                            <!--  <li>
                                <a href="#">
                                    <i class="fa fa-money"></i> <span> Transaction </span>
                                </a>
                            </li>

                             <li>
                                <a href="#">
                                    <i class="fa fa-envelope"></i> <span> Message </span>
                                </a>
                            </li> -->

                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>