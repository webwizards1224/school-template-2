<?php require 'sqlFiles/auth-session.php'; ?>
<?php require 'header.php'; ?>


<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        <?php require 'navbar.php'; ?>

        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        <div class="pcoded-navigation-label">Navigation</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="">
                                <a href="dashboard.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Dashboard</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="notice.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Notice</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="news.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">News</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="events.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Events</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="holidays.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Holidays</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="rules.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Rules & Regulations</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="complaints.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Complaints & Suggestions</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="alumni.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Alumni</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="forms.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Forms</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="media-coverage.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Media Coverage</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                            <li class="">
                                <a href="award.php" class="waves-effect waves-dark">
                                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                    <span class="pcoded-mtext">Awards</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="pcoded-content">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Dashboard</h5>
                                        <p class="m-b-0">Welcome to Material Able</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="dashboard.php"> <i class="fa fa-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">

                                <!-- Page body start -->
                                <div class="page-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Material Form Inputs</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material">
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Username</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Email (exa@gmail.com)</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <input type="password" name="footer-email"
                                                                class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Password</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                value="My value">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Predefine value</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                disabled>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Disabled</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                maxlength="6">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Max length 6 char</label>
                                                        </div>
                                                        <div class="form-group form-default">
                                                            <textarea class="form-control"></textarea>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Text area Input</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Material Form Inputs With Static Label</h5>
                                                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material">
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                placeholder="Enter User Name">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Username</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                placeholder="Enter Email">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Email (exa@gmail.com)</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="password" name="footer-email"
                                                                class="form-control" placeholder="Enter Password">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Password</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                placeholder="Pre define value" value="My value">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Predefine value</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                placeholder="disabled Input" disabled>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Disabled</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control"
                                                                maxlength="6" placeholder="Enter only 6 char">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Max length 6 char</label>
                                                        </div>
                                                        <div class="form-group form-default form-static-label">
                                                            <textarea class="form-control">Enter Text hear</textarea>
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Text area Input</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Colored Input</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material">
                                                        <div class="form-group form-default">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-default</label>
                                                        </div>
                                                        <div class="form-group form-primary">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-primary</label>
                                                        </div>
                                                        <div class="form-group form-success">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-success</label>
                                                        </div>
                                                        <div class="form-group form-danger">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-danger</label>
                                                        </div>
                                                        <div class="form-group form-warning">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-warning</label>
                                                        </div>
                                                        <div class="form-group form-info">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-info</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Colored Input With Static Label</h5>
                                                </div>
                                                <div class="card-block">
                                                    <form class="form-material">
                                                        <div class="form-group form-default form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-default</label>
                                                        </div>
                                                        <div class="form-group form-primary form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-primary</label>
                                                        </div>
                                                        <div class="form-group form-success form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-success</label>
                                                        </div>
                                                        <div class="form-group form-danger form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-danger</label>
                                                        </div>
                                                        <div class="form-group form-warning form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-warning</label>
                                                        </div>
                                                        <div class="form-group form-info form-static-label">
                                                            <input type="text" name="footer-email" class="form-control">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">form-info</label>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- Basic Form Inputs card start -->
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>Basic Form Inputs</h5>
                                                    <span>Add class of <code>.form-control</code> with
                                                        <code>&lt;input&gt;</code> tag</span>
                                                </div>
                                                <div class="card-block">
                                                    <h4 class="sub-title">Basic Inputs</h4>
                                                    <form>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Simple Input</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Placeholder</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Type your title in Placeholder">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password input">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Read only</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    placeholder="You can't change me" readonly>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Disable Input</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Disabled text" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Predefine
                                                                Input</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    value="Enter yout content after me">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Select Box</label>
                                                            <div class="col-sm-10">
                                                                <select name="select" class="form-control">
                                                                    <option value="opt1">Select One Value Only</option>
                                                                    <option value="opt2">Type 2</option>
                                                                    <option value="opt3">Type 3</option>
                                                                    <option value="opt4">Type 4</option>
                                                                    <option value="opt5">Type 5</option>
                                                                    <option value="opt6">Type 6</option>
                                                                    <option value="opt7">Type 7</option>
                                                                    <option value="opt8">Type 8</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Round Input</label>
                                                            <div class="col-sm-10">
                                                                <input type="text"
                                                                    class="form-control form-control-round"
                                                                    placeholder=".form-control-round">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Maximum
                                                                Length</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Content must be in 6 characters"
                                                                    maxlength="6">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Disable
                                                                Autocomplete</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Autocomplete Off" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Static Text</label>
                                                            <div class="col-sm-10">
                                                                <div class="form-control-static">Hello !... This is
                                                                    static text
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Color</label>
                                                            <div class="col-sm-10">
                                                                <input type="color" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Upload File</label>
                                                            <div class="col-sm-10">
                                                                <input type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Textarea</label>
                                                            <div class="col-sm-10">
                                                                <textarea rows="5" cols="5" class="form-control"
                                                                    placeholder="Default textarea"></textarea>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h4 class="sub-title">Input Sizes</h4>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-12">
                                                                        <input type="text"
                                                                            class="form-control form-control-lg"
                                                                            placeholder=".form-control-lg">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                            placeholder=".form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-8">
                                                                        <input type="text"
                                                                            class="form-control form-control-sm"
                                                                            placeholder=".form-control-sm">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 mobile-inputs">
                                                            <h4 class="sub-title">Color Inputs</h4>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-control-primary"
                                                                        placeholder=".form-control-primary">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-warning"
                                                                            placeholder=".form-control-warning">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-default"
                                                                            placeholder=".form-control-default">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-danger"
                                                                            placeholder=".form-control-danger">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-success"
                                                                            placeholder=".form-control-success">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-inverse"
                                                                            placeholder=".form-control-inverse">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-control-info"
                                                                            placeholder=".form-control-info">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6 mobile-inputs">
                                                            <h4 class="sub-title">Text-color</h4>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-txt-primary"
                                                                        placeholder=".form-txt-primary">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-warning"
                                                                            placeholder=".form-txt-warning">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-default"
                                                                            placeholder=".form-txt-default">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-danger"
                                                                            placeholder=".form-txt-danger">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-success"
                                                                            placeholder=".form-txt-success">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-inverse"
                                                                            placeholder=".form-txt-inverse">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-txt-info"
                                                                            placeholder=".form-txt-info">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-sm-6 mobile-inputs">
                                                            <h4 class="sub-title">Background-color</h4>
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text"
                                                                        class="form-control form-bg-primary"
                                                                        placeholder=".form-bg-primary">
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-warning"
                                                                            placeholder=".form-bg-warning">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-default"
                                                                            placeholder=".form-bg-default">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-danger"
                                                                            placeholder=".form-bg-danger">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-success"
                                                                            placeholder=".form-bg-success">
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-inverse"
                                                                            placeholder=".form-bg-inverse">
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <input type="text"
                                                                            class="form-control form-bg-info"
                                                                            placeholder=".form-bg-info">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic Form Inputs card end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Page body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>