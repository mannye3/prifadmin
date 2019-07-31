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
                                    <h4 class="page-title">Agents  <!-- <?php echo $row["name"]; ?> --></h4>
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
                                <div class="card-box table-responsive">
                                    <!-- <h4 class="m-t-0 header-title">Properties</h4> -->
                                <div class="col-sm-4">
                                <button type="button" data-target="#signup-modal" data-toggle="modal" class="btn btn-custom btn-rounded w-md waves-effect waves-light mb-4"><i class="mdi mdi-plus-circle"></i>Add New</button>
                            </div>

                                    <table id="datatable-buttons" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" >


                                       <thead>
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th></th>
                                            <th>Full Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Properties</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                          
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td><b>#1256</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/photo.jpg" />
                                                   
                                                </a>
                                            </td>

                                            <td>
                                                Emmanuel John
                                            </td>

                                            <td>
                                               08062165573
                                            </td>

                                            <td>
                                               Emmanuel@me.com
                                            </td>

                                            <td>
                                               3
                                            </td>

                                            <td>
                                                2018/04/28
                                            </td>

                                             <td>
                                                <span class="badge badge-danger">Not Active</span>
                                            </td>

                                            
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="user.php"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>

                                                         <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope mr-2 text-muted font-18 vertical-middle"></i>Send Message</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Change Status</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



                                         <tr>
                                            <td><b>#2542</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="assets/images/photo.jpg" />
                                                   
                                                </a>
                                            </td>

                                            <td>
                                            John Emmanuel
                                            </td>

                                            <td>
                                               08062165573
                                            </td>

                                            <td>
                                               John@me.com
                                            </td>

                                            <td>
                                               3
                                            </td>

                                            <td>
                                                2018/12/28
                                            </td>

                                             <td>
                                                <span class="badge badge-success">Active</span>
                                            </td>

                                            
                                            <td>
                                                 <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="user.php"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>

                                                         <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="#"><i class="fa fa-envelope mr-2 text-muted font-18 vertical-middle"></i>Send Message</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Change Status</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




                          <!-- Signup modal content -->
                                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <h2 class="text-uppercase text-center m-b-30">
                                                        Add New User
                                                    </h2>


                                                    <form class="form-horizontal" action="#">

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="username">First Name</label>
                                                                <input class="form-control" type="email" id="username" required="" placeholder="Zenaty">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="username">Last  Name</label>
                                                                <input class="form-control" type="email" id="username" required="" placeholder="Michael ">
                                                            </div>
                                                        </div>


                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress">Phone Number</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="090999999">
                                                            </div>
                                                        </div>



                                                             <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="emailaddress">Email address</label>
                                                                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                            </div>
                                                        </div>

                                                        <div class="form-group m-b-25">
                                                            <div class="col-12">
                                                                <label for="password">Password</label>
                                                                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                            </div>
                                                        </div>

                                                  

                                                        <div class="form-group account-btn text-center m-t-10">
                                                            <div class="col-12">
                                                                <button class="btn w-lg btn-rounded btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                            </div>
                                                        </div>

                                                    </form>


                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                    </div> <!-- container -->

                </div> <!-- content -->



<?php require APPROOT . '/views/inc/footer_inner.php'; ?>


       