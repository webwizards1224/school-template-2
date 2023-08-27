<!DOCTYPE html>
<html lang="en">

<head>
  <?php require 'header.php'; ?>
</head>

<body>
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
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <!-- <span class="navbar-toggler-icon"></span> -->
        <span class="navbar-toggler-icon">
          <i class="fas fa-bars" style="color:#fff; font-size:28px;"></i>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown"> About Us </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about.php"> Our Story </a></li>
              <li><a class="dropdown-item" href="messages-from-dignitaries.php"> Messages from Dignitaries </a></li>
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
          <li class="nav-item"><a class="nav-link" href="complaints-suggestions.php">Complaints & Suggestions</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Notice Start -->
  <div class="bg-light-blue">
    <div class="container px-4 py-2">
      <div class="slider-container">
        <div class="announcementslider">
          <div class="slide d-flex pe-3 text-white">
            <i class="fa fa-bullhorn pt-1 pe-2"></i>
            <p class="m-0">Students Organize Successful Fundraiser for Community
              Library Renovation</p>
          </div>
          <div class="slide d-flex pe-3 text-white">
            <i class="fa fa-bullhorn pt-1 pe-2"></i>
            <p class="m-0">Education Board Approves New Curriculum to Promote
              Inclusivity and Diversity
            </p>
          </div>
          <div class="slide d-flex pe-3 text-white">
            <i class="fa fa-bullhorn pt-1 pe-2"></i>
            <p class="m-0">Award-Winning Teacher Recognized for Outstanding
              Contributions to Education
            </p>
          </div>
          <div class="slide d-flex pe-3 text-white">
            <i class="fa fa-bullhorn pt-1 pe-2"></i>
            <p class="m-0">Special Guest Speaker Inspires Students with Career Success
              Story</p>
          </div>
          <div class="slide d-flex pe-3 text-white">
            <i class="fa fa-bullhorn pt-1 pe-2"></i>
            <p class="m-0">Middle School Debate Team Shines at Regional Debate
              Championship</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Notice End -->

  <!-- Banner Start -->
  <div class="container-fluid bg-dark-blue mb-5">
    <video autoplay muted loop style="width: 100%;">
      <source src="assets/img/bck3.mp4" type="video/mp4">
    </video>
  </div>
  <!-- Banner End -->

  <!-- Main Section Start -->
  <div class="container">
    <div class="row pt-5 flex-wrap-reverse ">
      <div class="col-lg-3 col-md-12 mb-5">
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">Our Vision</h3>
          <div class="left-container">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/vision.png" alt />
              <div class="card-body bg-white p-4">
                <p>
                  In the globalized Techno dominated society of the 21 st Century,
                  trends in education are changing. The Holistic Development of a
                  child in a stimulating environment is our highest priority.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">Our Mission</h3>
          <div class="left-container">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="assets/img/mission.png" alt />
              <div class="card-body bg-white p-4">
                <p>
                  To provide an environment that lays emphasis on intellectual and
                  emotional growth in which every student discover and realizes the
                  potential and the highest academic standard.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 mb-5">
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">Know About Us</h3>
          <div class="slider-container bg-white p-3">
            <!-- About Start -->
            <div class="container-fluid py-5">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="assets/img/about-1.jpg" alt />
                  </div>
                  <div class="col-lg-7">
                    <p>
                      P.K.Educational Trust’s SHREE SIDDHI VINAYAGAR ENGLISH HIGH
                      SCHOOL was established on 23rd July 1981 by Honorable Trustee Shree
                      P.K.Krishnan sir in the Vikhroli - the heart of Mumbai. It is a Co-
                      Educational English Medium School affiliated with MAHARASHTRA
                      STATE BOARD. Its main objective is Education- aiming at the overall
                      integral development of the children. No discrimination of Caste, Creed or
                      race.
                    </p>
                    <a href="about.html" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- About End -->

            <!-- FAQs Start -->
            <!--Section: FAQ-->
            <section>
              <div class="text-center pb-2">
                <p class="section-title px-5">
                  <span class="px-2">Find the answers for</span>
                </p>
                <h1 class="mb-4"> FAQ
                </h1>
              </div>
              <div class="row">
                <div class="col-md-12 col-lg-6 mb-4">
                  <h6 class="mb-3 text-blue"><i class="far fa-paper-plane text-blue pe-2"></i> A
                    simple
                    question?</h6>
                  <p>
                    <strong><u>Absolutely!</u></strong> We work with top
                    payment companies which guarantees
                    your
                    safety and
                    security. All billing information is stored on our payment
                    processing partner.
                  </p>
                </div>

                <div class="col-md-12 col-lg-6 mb-4">
                  <h6 class="mb-3 text-blue"><i class="fas fa-pen-alt text-blue pe-2"></i> A question
                    that
                    is longer then the previous one?</h6>
                  <p>
                    <strong><u>Yes, it is possible!</u></strong> You can
                    cancel your subscription anytime in
                    your
                    account. Once the subscription is
                    cancelled, you will not be charged next month.
                  </p>
                </div>

                <div class="col-md-12 col-lg-6 mb-4">
                  <h6 class="mb-3 text-blue"><i class="fas fa-user text-blue pe-2"></i> A simple
                    question?
                  </h6>
                  <p>
                    Currently, we only offer monthly subscription. You can
                    upgrade or cancel your monthly
                    account at any time with no further obligation.
                  </p>
                </div>

                <div class="col-md-12 col-lg-6 mb-4">
                  <h6 class="mb-3 text-blue"><i class="fas fa-rocket text-blue pe-2"></i> A simple
                    question?
                  </h6>
                  <p>
                    Yes. Go to the billing section of your dashboard and
                    update your payment information.
                  </p>
                </div>
              </div>
            </section>
            <!--Section: FAQ-->
            <!-- FAQs End -->

            <!-- Team Start -->
            <div class="container-fluid pt-5">
              <div class="container">
                <div class="text-center pb-2">
                  <p class="section-title px-5">
                    <span class="px-2">Our Teachers</span>
                  </p>
                  <h1 class="mb-4">Meet Our Teachers</h1>
                </div>
                <div class="row owl-carousel teacher-carousel">
                  <div class="text-center team px-3 mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                      <img class="img-fluid w-100" src="assets/img/team-1.jpg" alt />
                      <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                    <h4>Julia Smith</h4>
                    <i>Music Teacher</i>
                  </div>
                  <div class="text-center team px-3 mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                      <img class="img-fluid w-100" src="assets/img/team-2.jpg" alt />
                      <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                    <h4>Jhon Doe</h4>
                    <i>Language Teacher</i>
                  </div>
                  <div class="text-center team px-3 mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                      <img class="img-fluid w-100" src="assets/img/team-3.jpg" alt />
                      <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                    <h4>Mollie Ross</h4>
                    <i>Dance Teacher</i>
                  </div>
                  <div class="text-center team px-3 mb-5">
                    <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                      <img class="img-fluid w-100" src="assets/img/team-4.jpg" alt />
                      <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light text-center me-2 px-0" style="width: 38px; height: 38px"
                          href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                      </div>
                    </div>
                    <h4>Donald John</h4>
                    <i>Art Teacher</i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Team End -->

            <!-- Testimonial Start -->
            <div class="container-fluid py-5">
              <div class="container p-0">
                <div class="text-center pb-2">
                  <p class="section-title px-5">
                    <span class="px-2">Testimonial</span>
                  </p>
                  <h1 class="mb-4">What Parents Say!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                  <div class="testimonial-item px-3 bg-dark-blue p-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                      <h3 class="fas fa-quote-left me-3 text-dark-blue"></h3>
                      Sed ea amet kasd elitr stet, stet rebum et ipsum est duo
                      elitr
                      eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="rounded-circle" src="assets/img/testimonial-1.jpg" style="width: 70px; height: 70px"
                        alt="Image" />
                      <div class="ps-3">
                        <h5>Parent Name</h5>

                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item px-3 bg-dark-blue p-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                      <h3 class="fas fa-quote-left me-3 text-dark-blue"></h3>
                      Sed ea amet kasd elitr stet, stet rebum et ipsum est duo
                      elitr
                      eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="rounded-circle" src="assets/img/testimonial-2.jpg" style="width: 70px; height: 70px"
                        alt="Image" />
                      <div class="ps-3">
                        <h5>Parent Name</h5>

                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item px-3 bg-dark-blue p-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                      <h3 class="fas fa-quote-left me-3 text-dark-blue"></h3>
                      Sed ea amet kasd elitr stet, stet rebum et ipsum est duo
                      elitr
                      eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="rounded-circle" src="assets/img/testimonial-3.jpg" style="width: 70px; height: 70px"
                        alt="Image" />
                      <div class="ps-3">
                        <h5>Parent Name</h5>

                      </div>
                    </div>
                  </div>
                  <div class="testimonial-item px-3 bg-dark-blue p-3">
                    <div class="bg-light shadow-sm rounded mb-4 p-4">
                      <h3 class="fas fa-quote-left me-3 text-dark-blue"></h3>
                      Sed ea amet kasd elitr stet, stet rebum et ipsum est duo
                      elitr
                      eirmod clita lorem. Dolor tempor ipsum clita
                    </div>
                    <div class="d-flex align-items-center">
                      <img class="rounded-circle" src="assets/img/testimonial-4.jpg" style="width: 70px; height: 70px"
                        alt="Image" />
                      <div class="ps-3">
                        <h5>Parent Name</h5>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Testimonial End -->
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-12 mb-5">
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">News</h3>
          <div class="slider-container bg-white p-3">
            <div class="newsslider">
              <div class="slide d-flex">
                <i class="fa fa-newspaper pt-1 pe-2"></i>
                <p>Students Organize Successful Fundraiser for Community
                  Library Renovation</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-newspaper pt-1 pe-2"></i>
                <p>Education Board Approves New Curriculum to Promote
                  Inclusivity and Diversity
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-newspaper pt-1 pe-2"></i>
                <p>Award-Winning Teacher Recognized for Outstanding
                  Contributions to Education
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-newspaper pt-1 pe-2"></i>
                <p>Special Guest Speaker Inspires Students with Career Success
                  Story</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-newspaper pt-1 pe-2"></i>
                <p>Middle School Debate Team Shines at Regional Debate
                  Championship</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">Notice</h3>
          <div class="slider-container bg-white p-3">
            <div class="noticeslider">
              <div class="slide d-flex">
                <i class="fa fa-bell pt-1 pe-2"></i>
                <p>Students Organize Successful Fundraiser for Community
                  Library
                  Renovation</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-bell pt-1 pe-2"></i>
                <p>Education Board Approves New Curriculum to Promote
                  Inclusivity and Diversity
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-bell pt-1 pe-2"></i>
                <p>Award-Winning Teacher Recognized for Outstanding
                  Contributions to Education
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-bell pt-1 pe-2"></i>
                <p>Special Guest Speaker Inspires Students with Career Success
                  Story</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-bell pt-1 pe-2"></i>
                <p>Middle School Debate Team Shines at Regional Debate
                  Championship</p>
              </div>
            </div>
          </div>
        </div>
        <div class="shadow bg-body rounded mb-5">
          <h3 class="bg-dark-blue text-white cardheader p-3 m-0">Events</h3>
          <div class="slider-container bg-white p-3">
            <div class="eventslider">
              <div class="slide d-flex">
                <i class="fa fa-calendar pt-1 pe-2"></i>
                <p>Students Organize Successful Fundraiser for Community
                  Library Renovation</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-calendar pt-1 pe-2"></i>
                <p>Education Board Approves New Curriculum to Promote
                  Inclusivity and Diversity
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-calendar pt-1 pe-2"></i>
                <p>Award-Winning Teacher Recognized for Outstanding
                  Contributions to Education
                </p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-calendar pt-1 pe-2"></i>
                <p>Special Guest Speaker Inspires Students with Career Success
                  Story</p>
              </div>
              <div class="slide d-flex">
                <i class="fa fa-calendar pt-1 pe-2"></i>
                <p>Middle School Debate Team Shines at Regional Debate
                  Championship</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Section End -->

  <!-- Footer Start -->
  <?php require 'footer.php'; ?>

</body>

</html>