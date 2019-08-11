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
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title">Edit Property</h4>
                                    
                                        <form method="POST" action="<?php echo URLROOT; ?>/accounts/edit_property/<?php echo $data['pro_info']->ref_id; ?>" >
                                   
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Property Title</label>
                                                <input type="tex" value="<?php echo $data['pro_info']->title; ?>" name="title" class="form-control">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label  class="col-form-label">Type</label>
                                                <select class="form-control" name="type" value="<?php echo $data['pro_info']->type; ?>" >
                                                    <option><?php echo $data['pro_info']->type; ?></option>
                                                     <option value="bungalow">Bungalow</option>
                                                 <option value="Duplex">Duplex</option>
                                                <option value="Flat">Flat</option>
                                                <option value="Villa">House/Villa</option>
                                                <option value="Industrial">Industrial Building</option>
                                                 <option value="Office">Office Space</option>
                                                <option value="Land">Plot/Land</option>
                                                <option value="Shop">Shop/Showroom</option>
                                                <option value="Store room">Store Room</option>
                                                <option value="Warehouse">Warehouse/Godown</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label  class="col-form-label">Purpose</label>
                                                <select class="form-control" name="purpose" value="<?php echo $data['pro_info']->purpose; ?>" >
                                                    <option><?php echo $data['pro_info']->purpose; ?></option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Sale
                                                    ">Sale</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Price(₦)</label>
                                                <input  type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $data['pro_info']->price; ?>" name="price" class="form-control">
                                            </div>

                                               
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bedrooms</label>
                                               <select class="form-control" name="rooms" value="<?php echo $data['pro_info']->rooms; ?>">
                                                    <option><?php echo $data['pro_info']->rooms; ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                     <option value="10">10</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bathrooms</label>
                                                 <select class="form-control" name="bathrooms" value="<?php echo $data['pro_info']->bathrooms; ?>">
                                                    <option><?php echo $data['pro_info']->bathrooms; ?></option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                     <option value="10">10</option>
                                                </select>
                                            </div>



                                            <div class="form-group col-md-4">
                                                <label  class="col-form-label">State</label>
                                                <input type="text" value="<?php echo $data['pro_info']->state; ?>" class="form-control" name="state">
                                               
                                               
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">City</label>
                                               <input type="text" value="<?php echo $data['pro_info']->lga; ?>" class="form-control" name="lga">

                                               
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Address</label>
                                                 <input type="text" value="<?php echo $data['pro_info']->address; ?>" name="address" onFocus="initializeAutocomplete()" id="locality" class="form-control">
                                                  <input type="hidden" name="city" id="city" placeholder="City" value="" >
                                          <input type="hidden" value="<?php echo $data['pro_info']->latitude; ?>" name="latitude" id="latitude" placeholder="Latitude" value="" >
                                          <input type="hidden" name="longitude" value="<?php echo $data['pro_info']->longitude; ?>" id="longitude" placeholder="Longitude" value="" >
                                            </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Detailed Information</label>
                                            <textarea type="text" name="details" class="form-control summernote" placeholder="1234 Main St"><?php echo $data['pro_info']->details; ?></textarea>
                                        </div>

                                        

                                        <br>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Name</label>
                                                <input type="text" readonly="" value="<?php echo $data['pro_info']->fullname; ?>" name="fullname" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState"    class="col-form-label">Email</label>
                                                <input type="text" readonly="" value="<?php echo $data['pro_info']->email; ?>" name="email" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip" class="col-form-label">Phone</label>
                                                <input type="text" readonly="" value="<?php echo $data['pro_info']->phone; ?>" name="phone" class="form-control" id="inputZip">
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        
                                        <div align="right">
                                         <button type="submit"  class="btn btn-custom btn-rounded waves-light waves-effect" name="upt-property">Submit</button>
                                         </div>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--  end row -->


                        
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © Highdmin. - Coderthemes.com
                </footer>

            </div>

              
 <?php require APPROOT . '/views/inc/footer_inner.php'; ?>    
