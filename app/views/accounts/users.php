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
                                    <h4 class="page-title">Users  <!-- <?php echo $row["name"]; ?> --></h4>
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

                            <?php flash('update_message'); ?>

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
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                          
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                             <?php foreach($data['users_info'] as $users_info) : ?>

                                        <tr>
                                            <td><b>#<?php echo $users_info->id;  ?></b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <?php
                                            
                                          if ($users_info->image ==""){
                                           echo '<img src="'.URLROOT.'/assets/images/3002121059.jpg" />';
                                           }  


                                           elseif ($users_info->image !=="") {

                                             echo '<img src="http://localhost/prifa/profile_pic/'.$users_info->image.'">';
                                                
                                             }  


                                        ?>
                                                   
                                                   
                                                </a>
                                            </td>

                                            <td>
                                                <?php echo $users_info->name;  ?>
                                            </td>

                                            <td>
                                               <?php echo $users_info->phone;  ?>
                                            </td>

                                            <td>
                                                <?php echo $users_info->email;  ?>
                                            </td>

                                            <td>
                                                <?php echo $users_info->reg_date;  ?>
                                            </td>

                                             <td>
                                                <?php   
                                        if ($users_info->status  == 1){
                                            echo '<span class="badge badge-success">Active</span></span>';
                                                        }
                                            ?>

                                            <?php

                                                if ($users_info->status == 0){
                                                echo '<span class="badge badge-danger">Not Active</span></span>';
                                            }
                                            ?>
                                               
                                            </td>

                                            
                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo URLROOT; ?>/accounts/user/<?php echo $users_info->id;  ?>"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>
                                                        <a class="dropdown-item" href="<?php echo URLROOT; ?>/accounts/delete_user/<?php echo $users_info->id; ?>"  onclick="return confirm('Are you sure you want to DELETE USER ?')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <a class="dropdown-item" href="<?php echo URLROOT; ?>/accounts/user_staus/<?php echo $users_info->id; ?>"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Change Status</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <?php endforeach; ?>

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


       