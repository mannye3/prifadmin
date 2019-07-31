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
                                    <h4 class="page-title">Properties </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#">Properties</a></li>
                                        
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
                                <!-- <div class="col-sm-4">
                                    <a href="add_property.php">
                                <button type="button" class="btn btn-custom btn-rounded w-md waves-effect waves-light mb-4"><i class="mdi mdi-plus-circle"></i>Add New</button></a>
                            </div> -->

                                    <table id="datatable-buttons" class="table table-hover m-0 tickets-list table-actions-bar dt-responsive nowrap" cellspacing="0" width="100%" >


                                       <thead>
                                        <tr>
                                            <th>
                                                ID
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
                                         
                                        <tr>
                                            <td><b>#1</b></td>
                                            <td>
                                                <a href="javascript: void(0);">
                                                    <img src="" alt="contact-img" title="contact-img"  />
                                                   
                                                </a>
                                            </td>

                                            <td>
                                               Home
                                            </td>

                                            <td>
                                             5000
                                            </td>

                                            <td>
                                                Active                                             

                                            </td>

                                          

                                            <td>
                                               20/20/2020
                                            </td>

                                           <!--  <td>
                                                2018/05/28
                                            </td> -->

                                            <td>
                                                <div class="btn-group dropdown">
                                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="property.php?property_no=<?php echo $rw5["property_no"]; ?>"><i class="fa fa-search mr-2 text-muted font-18 vertical-middle"></i>view</a>

                                                         <a class="dropdown-item" href="edit_property.php?property_no=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit</a>
                                                        <a class="dropdown-item" href="inc/delete.php?id=<?php echo $rw5["id"];?> " onclick="return confirm('Are you sure you want to DELETE PROPERTY ?')"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                                        <!-- <a class="dropdown-item" href="inc/rent_status.php?id=<?php echo $rw5["property_no"]; ?>"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Rentout</a> -->
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


                       



        


                       

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>
              
 <?php require APPROOT . '/views/inc/footer_inner.php'; ?>    
