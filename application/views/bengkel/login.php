
<!--=================================
header -->
<header class="header bg-dark">
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <img class="img-fluid" src="<?= base_url(); ?>assets/images/logo.svg" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">index Default</a></li>
              <li><a class="dropdown-item" href="index-02.html">index 02</a></li>
              <li><a class="dropdown-item" href="index-03.html">index 03</a></li>
              <li><a class="dropdown-item" href="index-map.html">index map</a></li>
              <li><a class="dropdown-item" href="index-slider.html">index Slider</a></li>
              <li><a class="dropdown-item" href="index-bg-video.html">index bg video</a></li>
              <li><a class="dropdown-item" href="index-splash.html">index splash</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item active">
            <a href="properties.html" class="nav-link" data-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu dropdown-menu-lg">
              <li>
                <div class="row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="about.html">About</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="career.html">Career</a></li>
                      <li><a href="advertising.html">Advertising</a></li>
                      <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                      <li><a href="post-a-job.html">Post a Job</a></li>
                      <li><a href="faqs.html">Faq</a></li>
                      <li><a href="browse-categories.html">Browse Categories</a></li>
                      <li><a href="browse-locations.html">Browse Locations</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li class="active"><a href="login.html">Login</a></li>
                      <li><a href="register.html">Register</a></li>
                      <li><a href="coming-soon.html">Coming soon</a></li>
                      <li><a href="404-error.html">404 Error</a></li>
                      <li><a href="terms-and-conditions.html">T&C</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="agency-logo pt-4 pb-3">
                      <h6 class="mb-3 nav-title">Top Agency</h6>
                      <ul class="list-unstyled">
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/07.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/06.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/05.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/04.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/03.svg" alt="">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Listing <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="job-grid.html">Job Grid</a></li>
              <li><a class="dropdown-item" href="job-listing.html">Job Listing</a></li>
              <li><a class="dropdown-item" href="job-detail.html">Job Detail</a></li>
              <li><a class="dropdown-item" href="job-listing-map.html">Job Listing Map</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item mega-menu">
            <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-sm-6 col-lg-5 mb-3 mb-lg-0">
                    <h6 class="mb-3 nav-title">Search Types</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="search-style-under-banner.html">Search style under banner</a></li>
                      <li><a href="search-style-above-banner.html">Search style above banner</a></li>
                      <li><a href="search-style-below-banner.html">Search style below banner</a></li>
                      <li><a href="search-style-advanced.html">Advanced Search style</a></li>
                      <li><a href="search-style-classic.html">Search style classic</a></li>
                      <li><a href="search-style-with-filter.html">Search style with filter</a></li>
                      <li><a href="search-style-advanced-02.html">Advanced Search style 02 </a></li>
                      <li><a href="search-style-advanced-03.html">Advanced Search style 03 </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                    <h6 class="mb-3 nav-title">Elements</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="element-feature-box.html">Feature box</a></li>
                      <li><a href="element-testimonials.html">Testimonials</a></li>
                      <li><a href="element-accordion.html">Accordion</a></li>
                      <li><a href="element-tabs.html">Tabs</a></li>
                      <li><a href="element-typography.html">Typography</a></li>
                      <li><a href="element-counter.html">counter</a></li>
                      <li><a href="element-countdown.html">Countdown</a></li>
                      <li><a href="element-category.html">Category</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="menu-banner bg-dark p-3 pt-4 text-center border-radius h-100 d-none d-lg-block">
                        <h5 class="text-primary mb-3 pt-2">Advertise your job with us</h5>
                        <span class="text-light"> Starting from</span>
                        <h3 class="text-white my-3">$99 <small>/mo</small></h3>
                        <p class="text-primary p-2 small text-white">Save 30% for new customer</p>
                        <a class="btn btn-light btn-sm" href="post-a-job.html">Post a job now!</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employer <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="employer-grid.html">Employer Grid</a></li>
              <li><a class="dropdown-item" href="employer-listing.html">Employer list</a></li>
              <li><a class="dropdown-item" href="employer-detail.html">Employer detail</a></li>
              <li><a class="dropdown-item" href="employer-listing-map.html">Employer Listing Map</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                <ul class="dropdown-menu left-side">
                  <li><a class="dropdown-item" href="dashboard-employer.html">Dashboard</a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-my-profile.html">Profile</a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-change-password.html">Change Password </a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-manage-candidates.html">Manage Candidates</a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-manage-jobs.html">Manage Jobs</a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-post-new-job.html">Post New Job</a></li>
                  <li><a class="dropdown-item" href="dashboard-employer-pricing.html">Pricing</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Candidates <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="candidates-grid.html">Candidates Grid</a></li>
              <li><a class="dropdown-item" href="candidates-listing.html">Candidates list</a></li>
              <li><a class="dropdown-item" href="candidate-detail.html">Candidates detail</a></li>
              <li><a class="dropdown-item" href="candidates-listing-map.html">Candidates Listing Map</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                <ul class="dropdown-menu left-side">
                  <li><a class="dropdown-item" href="dashboard-candidates.html">Dashboard</a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-my-profile.html">Profile</a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-change-password.html">Change Password </a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-my-resume.html">My Resume</a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-manage-jobs.html">Manage Jobs</a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-saved-jobs.html">Saved Jobs</a></li>
                  <li><a class="dropdown-item" href="dashboard-candidates-pricing.html">Pricing</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item" href="my-resume.html">My Resume <span class="badge badge-danger ml-2">CV</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="add-listing">
          <div class="login d-inline-block mr-4">
            <a href="#"><i class="far fa-user pr-2"></i>Sign in</a>
          </div>
          <a class="btn btn-white btn-md" href="post-a-job.html"> <i class="fas fa-plus-circle"></i>Post a job</a>
        </div>
    </div>
  </nav>
</header>
  <!--=================================
  header -->

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Login</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index.html"> Home </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Login </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Signin -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
          <div class="section-title">
           <h4 class="text-center">Login to Your Account</h4>
          </div>
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item mr-4">
                <a class="nav-link active"  data-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ml-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="form-row">
                  <div class="form-group col-12">
                    <label for="Email2">Username / Email Address</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12">
                    <label for="password2">Password *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6">
                    <a class="btn btn-primary btn-block" href="#">Sign up</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ml-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="custom-control custom-checkbox mt-2">
                        <input type="checkbox" class="custom-control-input" id="Remember-02">
                        <label class="custom-control-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f mr-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter mr-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google mr-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in mr-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Signin -->

<!--=================================
feature-info -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ml-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white pl-sm-4 pl-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ml-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature-info-->

<!--=================================
footer-->
<footer class="footer bg-light">
  <div class="position-relative">
    <svg class="footer-shape"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      width="100%" height="85px">
      <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
        d="M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z"/>
      </svg>
    </div>
    <div class="container pt-5">
      <div class="row mt-5">
        <div class="col-lg-3 col-md-6">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Trending Job</h5>
            <ul class="list-unstyled">
              <li><a href="#">Browse Jobs</a></li>
              <li><a href="#">Browse Categories</a></li>
              <li><a href="#">Submit Resume</a></li>
              <li><a href="#">Candidate Dashboard</a></li>
              <li><a href="#">Job Alerts</a></li>
              <li><a href="#">My Bookmarks</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Trending Companies</h5>
            <ul class="list-unstyled">
              <li><a href="#">Shortcodes</a></li>
              <li><a href="#">Job Page</a></li>
              <li><a href="#">Job Page Alternative</a></li>
              <li><a href="#">Resume Page</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Subscribe Us</h5>
          <div class="footer-subscribe">
            <p>Sign Up to our Newsletter to get the latest news and offers.</p>
            <form>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-primary btn-md">Get Notified</button>
            </form>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Download App</h5>
          <div class="footer-subscribe">
            <p>Download the latest Slick new job apps now</p>
            <div class="d-inline-block">
              <a class="btn btn-white btn-sm btn-app " href="#">
                <i class="fab fa-apple"></i>
                <div class="btn-text text-left">
                  <small>Download on the </small>
                  <span class="mb-0 d-block">App Store</span>
                </div>
              </a>
              <a class="btn btn-white btn-sm btn-app mt-3" href="#">
                <i class="fab fa-google-play"></i>
                <div class="btn-text text-left">
                  <small>Get it on  </small>
                  <span class="mb-0 d-block">Google Play</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="d-flex justify-content-md-start justify-content-center">
              <ul class="list-unstyled d-flex mb-0">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="contact-us.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-right mt-4 mt-md-0">
            <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href="#"> Jobber </a> All Rights Reserved </p>
          </div>
        </div>
      </div>
    </div>
</footer>
