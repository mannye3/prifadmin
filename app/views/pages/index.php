<?php require APPROOT . '/views/inc/header.php'; ?>
  <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?php echo URLROOT; ?>/assets/images/news1.jpg');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="#" class="text-success">
                                    <span><img src="<?php echo URLROOT; ?>/assets/images/edit3.png" alt="" height="26"></span>
                                </a>
                            </h2>

                            <form class="" action="<?php echo URLROOT; ?>/pages/index"  method="post">

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                       
                                        <input class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="<?php echo URLROOT; ?>/pages/foget_password" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                        <input class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"  name="password" type="password" required="" id="password" placeholder="Enter your password">
                                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                        
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="">
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit" name="login">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <!-- <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="page-register.html" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div> -->

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 All Right Reserved.</p>
            </div>

        </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
