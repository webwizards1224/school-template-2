    <?php require 'header.php'; ?>

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <img class="logo" src="assets/images/logo.png" alt="logo.png">
                    </div>
                    <div class="auth-box card">
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary">Sign up</h3>
                                </div>
                            </div>
                            <form class="md-float-material form-material" method="post" action="sqlFiles/registerSQL.php">
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control" require>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" require>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control" require>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Password</label>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" value="Sign
                                            up now" />
                                    </div>
                                </div>
                                <div class="row m-t-25 text-center">
                                    <div class="col-12">
                                        <div class="forgot-phone text-right f-right">
                                            <a href="login.php" class="text-center f-w-600">Existing User</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container-fluid -->
    </section>
    <?php require 'footer.php'; ?>