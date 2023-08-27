<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'header.php'; ?>
</head>


<body>

    <div class="container">
        <!-- Navbar Start -->
        <!-- As a heading -->
        <nav class="navbar navbar-light bg-light-blue text-center">
            <div class="navbar-brand alignment d-flex mx-auto container">
                <img src="assets/img/logo.png" alt="logo" style="height: 100px;margin-right: 30px;">
                <div class="school_header">
                    <h5>P. K. Educational Trust's</h5>
                    <h1 class="m-0 text-white">Shree Siddhi Vinayagar English High School
                    </h1>
                </div>
            </div>
        </nav>

        <!-- As a link -->
        <nav class="navbar navbar-expand-lg bg-dark-blue navbar-light">
            <div class="navbar-brand d-flex mx-auto container">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle active" href="#" data-bs-toggle="dropdown"> About Us
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="about.php"> Our Story </a></li>
                                <li><a class="dropdown-item" href="messages-from-dignitaries.php"> Messages from
                                        Dignitaries </a></li>
                                <li><a class="dropdown-item" href="mentors.php"> Meet Our Teachers </a></li>
                                <li><a class="dropdown-item" href="awards.php"> Awards </a></li>
                                <li><a class="dropdown-item" href="media-coverage.php"> Media Coverage </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> Academics </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="holiday-list.php"> Holidays of the Year </a></li>
                                <li><a class="dropdown-item" href="rules-regulations.php"> Rules & Regulations </a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="admissions.php">Admissions</a></li>
                        <li class="nav-item"><a class="nav-link" href="fee-structure.php">Fee Structure</a></li>
                        <li class="nav-item"><a class="nav-link" href="faqs.php">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="forms.php">Forms</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="complaints-suggestions.php">Complaints &
                                Suggestions</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Banner Start -->
        <div>
            <img class="abt_banner" src="assets/img/abt_banner2.png" alt="...">
        </div>
        <!-- Banner End -->

        <div class="white-sec">
            <!-- Media Coverage Start -->

            <!-- Media Coverage End -->
        </div>

        <!-- Footer Start -->
        <?php require 'footer.php'; ?>
    </div>
</body>

</html>