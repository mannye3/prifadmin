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
                                       <center><img src="assets/images/photo.jpg" width="150" height="150" ></center>

                                        <hr/>

                                        <div class="text-left">
                                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">Emmanuel John</span></p>

                                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">08062165573</span></p>

                                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">emmanuel@me.com</span></p>

                                            <p class="text-muted font-13"><strong>State :</strong> <span class="m-l-15">Lagos</span></p>

                                             <p class="text-muted font-13"><strong>City :</strong> <span class="m-l-15">Surulere</span></p>

                                           

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
                                            <h2 class="m-b-20" data-plugin="counterup">5</h2>
                                           
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-paypal float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Active Properties</h6>
                                            <h2 class="m-b-20"><span data-plugin="counterup">5</span></h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                    <div class="col-sm-4">
                                        <div class="card-box tilebox-one">
                                            <i class="icon-rocket float-right text-muted"></i>
                                            <h6 class="text-muted text-uppercase mt-0">Total Properties</h6>
                                            <h2 class="m-b-20" data-plugin="counterup">10</h2>
                                            
                                        </div>
                                    </div><!-- end col -->

                                </div>
                                <!-- end row -->


                                <div class="card-box">
                                    <h4 class="header-title mt-0 mb-3">Edit Profile </h4>
                                    <div class="">
                                        <div class="">
                                            <form action="#">
                                        <div class="form-group">
                                            <label for="userName">First Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   value="Emmanuel" class="form-control" id="userName">
                                        </div>

                                         <div class="form-group">
                                            <label for="userName">Last Name<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                   value="John" class="form-control" id="userName">
                                        </div>

                                        <div class="form-group">
                                           <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                  required value="Emmanuel@me.com" class="form-control" id="userName">
                                        </div>



                                         <div class="form-group">
                                            <label for="emailAddress">Phone Number<span class="text-danger">*</span></label>
                                            <input type="text" name="nick" parsley-trigger="change" required
                                                  required value="08062165573" class="form-control" id="userName">
                                        </div>

                                        <div class="form-group">
                                            <label for="pass1">Password<span class="text-danger">*</span></label>
                                            <input id="pass1" type="password" placeholder="Password" required
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                            <input data-parsley-equalto="#pass1" type="password" required
                                                   placeholder="Password" class="form-control" id="passWord2">
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
                                    <h4 class="header-title mb-3">Properties</h4>

                                    <div class="table-responsive">
                                        <table class="table m-b-0">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Property Name</th>
                                                <th>Start Date</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                            
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td> <img src="assets/images/news1.jpg" width="50" height="50" /></td>
                                                <td>2 Bedrooms Apartment</td>
                                                <td>01/01/2018</td>
                                                <td>03/05/2018</td>
                                                <td> <span class="badge badge-success">Active</span></td>
                                                
                                            </tr>
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <!-- end col -->

                        </div>
                        <!-- end row -->



  <?php require APPROOT . '/views/inc/footer_inner.php'; ?>    