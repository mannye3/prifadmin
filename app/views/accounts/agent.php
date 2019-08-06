 <?php require APPROOT . '/views/inc/header_inner.php'; ?>    



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
                                    <h4 class="page-title">Agent  <!-- <?php echo $row["name"]; ?> --></h4>
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
                            <div class="col-md-4">
                                <!-- Personal-Information -->
                                <div class="card-box">
                                  
                                    <div class="panel-body">
                                       <center>
                                        <?php
                                            
                                          if ($data['agent_info']->image ==""){
                                           echo '<img src="'.URLROOT.'/assets/images/3002121059.jpg" width="150" height="150" />';
                                           }  


                                           elseif ($data['agent_info']->image !=="") {

                                             echo '<img src="http://localhost/prifa/profile_pic/'.$data['agent_info']->image.'" width="150" height="150">';
                                                
                                             }  


                                        ?></center>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15"><?php echo $data['agent_info']->name;  ?></span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15"><?php echo $data['agent_info']->phone;  ?></span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15"><?php echo $data['agent_info']->email;  ?></span></p>

                                           <!--  <p class="text-muted font-13"><strong>State :</strong> <span class="m-l-15">Lagos</span></p>

                                             <p class="text-muted font-13"><strong>City :</strong> <span class="m-l-15">Surulere</span></p> -->

                                           

                                        </div>

                                       <!--  <ul class="social-links list-inline m-t-20 m-b-0">
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                              

                            </div>


                            <div class="col-md-8">

                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-layers float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Pending Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $data['pending_property']->TotalPendingProperty;  ?></h2>
                                           
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-paypal float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Active Properties</h6>
                                            <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $data['active_property']->TotalActiveProperty;  ?></span></h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-rocket float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup"><?php echo $data['agent_property']->TotalAgentProperty;  ?></h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Edit Profile </h4>
                                    <div class="">
                                        <div class="">
                                         <form action="<?php echo URLROOT; ?>/accounts/agent/<?php echo $data['agent_info']->id;  ?>" method="post">
                                        <div class="form-group">
                                            <label for="userName">Full Name<span class="text-danger">*</span></label>
                                            <input type="text" name="name" parsley-trigger="change" required
                                                   value="<?php echo $data['agent_info']->name;  ?>" class="form-control" id="userName">
                                        </div>

                                         

                                        <div class="form-group">
                                           <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="text" name="email" parsley-trigger="change" required
                                                  required value="<?php echo $data['agent_info']->email;  ?>" class="form-control" id="userName">
                                        </div>



                                         <div class="form-group">
                                            <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                            <input type="text" name="phone" parsley-trigger="change" required
                                                  required value="<?php echo $data['agent_info']->phone;  ?>" class="form-control" id="userName">
                                        </div>

                                        
                                    

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-custom waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                           
                                        </div>

                                    </form>
                                        </div>

                                        

                                    </div>
                                </div>


                                <div class="card-box">
                                    <h4 class="header-title mb-3">Password</h4>
                                    <form action="<?php echo URLROOT; ?>/accounts/edit_agentpass/<?php echo $data['agent_info']->id;  ?>" method="post">
                                    <div class="table-responsive">
                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="password" name="password" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="confirm_password">
                                        </div>

                                         <div class="form-group text-right m-b-0">
                                            <button class="btn btn-custom waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                           
                                        </div>
                                    </div>
                                    </form>
                                </div>


                                <div class="card-box">
                                    <h4 class="header-title mb-3">Properties</h4>

                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" >


                                       <thead>
                                        <tr>
                                            <th>
                                                Ref ID
                                            </th>
                                            <th></th>
                                            <th>Property Title</th>
                                            <th>Price(N)</th>
                                            <th>Status</th>
                                            <th>Upload Date</th>
                                          <!--   <th>Due Date</th> -->
                                            <th class="hidden-sm">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                            <?php foreach($data['agentpro'] as $agentpro): ?>
                                         
                                        <tr>
                                            <td><b><?php echo $agentpro->ref_id;  ?></b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="http://localhost/prifa/pro_pics/<?php echo $agentpro->pic; ?>" alt="property-img"   />
                                                   
                                                </a>
                                            </td>

                                            <td>
                                               <?php echo $agentpro->title;  ?>
                                            </td>

                                            <td>
                                             <?php echo $agentpro->price;  ?>
                                            </td>

                                            <td>
                                               <?php   
                                        if ($agentpro->status  == 1){
                                            echo '<span class="badge badge-success">Active</span></span>';
                                                        }
                                            ?>

                                            <?php

                                                if ($agentpro->status == 0){
                                                echo '<span class="badge badge-danger">Not Active</span></span>';
                                            }
                                            ?>                                         

                                            </td>

                                          

                                            <td>
                                              <?php echo $agentpro->upload_date;  ?>
                                            </td>

                                           <!--  <td>
                                                2018/05/28
                                            </td> -->

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="<?php echo URLROOT; ?>/accounts/property/<?php echo $agentpro->ref_id;  ?>"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>

                                                         <a class="dropdown-item" href="edit_property.php?property_no=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                        <a class="dropdown-item" href="inc/delete.php?id=<?php echo $rw5["id"];?> " onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <!-- <a class="dropdown-item" href="inc/rent_status.php?id=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Rentout</a> -->
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
                            <!-- end col -->

                        </div>
                        <!-- end row -->



  <?php require APPROOT . '/views/inc/footer_inner.php'; ?>    