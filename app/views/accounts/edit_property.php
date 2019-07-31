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
                                    
                                        <form method="POST" action="core/logic-edit.php?id=<?php echo $row3["id"]; ?>">
                                   
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label for="inputEmail4" class="col-form-label">Property Title</label>
                                                <input type="tex" value="<?php echo $row3["title"]; ?>" name="title" class="form-control">
                                            </div>
                                             <div class="form-group col-md-6">
                                                <label  class="col-form-label">Type</label>
                                                <select class="form-control" name="type" value="<?php echo $row3["type"]; ?>" >
                                                    <option><?php echo $row3["type"]; ?></option>
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
                                                <select class="form-control" name="purpose" value="<?php echo $row3["type"]; ?>" >
                                                    <option><?php echo $row3["purpose"]; ?></option>
                                                    <option value="Rent">Rent</option>
                                                    <option value="Sale
                                                    ">Sale</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Price(₦)</label>
                                                <input  type="input" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $row3["price"]; ?>" name="price" class="form-control">
                                            </div>

                                               
                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Bedrooms</label>
                                               <select class="form-control" name="rooms" value="<?php echo $row3["rooms"]; ?>">
                                                    <option><?php echo $row3["rooms"]; ?></option>
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
                                                 <select class="form-control" name="bathrooms" value="<?php echo $row3["bathrooms"]; ?>">
                                                    <option><?php echo $row3["bathrooms"]; ?></option>
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
                                                <select class="form-control"  name="state" id="state" onchange="change_location();">
                                  <option value="<?php echo $row3['state'] ?>"><?php echo $row3['state'] ?></option>
                                        <?php
                                      while ($re_st = mysqli_fetch_array($stlg)) {
                                      echo '<option value="'.$re_st['name'].'" >
                                      '.$re_st['name'].'</option>';
                                               }
                                             ?>
                                      </select>
                                               
                                               
                                            </div>


                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">City</label>
                                                <select required="" name="lga" id="city" class="form-control" name="choose-state">
                                              <option><?php echo $row3['lga'] ?></option>
                                                  </select>

                                               
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="inputPassword4" class="col-form-label">Address</label>
                                                 <input type="text" value="<?php echo $row3["address"]; ?>" name="address" onFocus="initializeAutocomplete()" id="locality" class="form-control">
                                                  <input type="hidden" name="city" id="city" placeholder="City" value="" >
                              <input type="hidden" value="<?php echo $row3["latitude"]; ?>" name="latitude" id="latitude" placeholder="Latitude" value="" >
                              <input type="hidden" name="longitude" value="<?php echo $row3["longitude"]; ?>" id="longitude" placeholder="Longitude" value="" >
                                            </div>

                                            </div>
                                        <div class="form-group">
                                            <label for="inputAddress" class="col-form-label">Detailed Information</label>
                                            <textarea type="text" name="details" class="form-control summernote" placeholder="1234 Main St"><?php echo $row3["details"]; ?></textarea>
                                        </div>

                                        

                                        <br>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <label for="inputCity" class="col-form-label">Name</label>
                                                <input type="text" readonly="" value="<?php echo $row3["fullname"]; ?>" name="fullname" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputState"    class="col-form-label">Email</label>
                                                <input type="text" readonly="" value="<?php echo $row3["email"]; ?>" name="email" class="form-control" id="inputCity">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="inputZip" class="col-form-label">Phone</label>
                                                <input type="text" readonly="" value="<?php echo $row3["phone"]; ?>" name="phone" class="form-control" id="inputZip">
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
