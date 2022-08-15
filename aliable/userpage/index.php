<?php

require 'connectionAliable.php';

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../images/logo.png" type="icon/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALiables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  
    <!--Whats app link-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

    <script type="text/javascript" src="floating-wpp.js"></script>




</head>
<body class="" onload="document.body.style.opacity='1'">
    

    <!--navbar-->

    <div class="previous-navbar">
      <nav class="navbar navbar-expand-lg fixed-top  px-xl-5 px-lg-5 px-md-5 px-sm-0 px-0">
          <div class="container-fluid px-xl-5 px-lg-5 px-md-4 px-sm-3 px-3">
            <a class="navbar-brand" href="index.php">
              <img src="../images/new-navbar-logo.png" class="w-100 p-0" alt="">  
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav ms-auto ">
                <li class="nav-item  mx-3  my-auto">
                  <a class="nav-link active " aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item mx-3  my-auto">
                  <a class="nav-link " href="AboutUs.html">About</a>
                </li>
                <li class="nav-item mx-3 my-auto">
                  <a class="nav-link " href="services.php">Services</a>
                </li>
                <li class="nav-item mx-3  my-auto">
                  <a class="nav-link  " href="blog.php">Blog</a>
                </li>
                <li class="nav-item mx-3  my-auto">
                  <a class="nav-link  " href="contact.php">Conatact</a>
                </li>
                
                <li class="nav-item mx-4">
                    <a href="//api.whatsapp.com/send?phone=923138275277&text=I want to have your consulation for my business." target="blanck" title="let's talk">
                      <button class=" nevbar-button px-3 py-2  ">Free Consulation</button>
                    </a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    </div>



<!--Header-->

<header class="container-fluid header ">
  <div class="row my-5"></div>
  <div class="row ">
    <div class="col-xl-1 col-lg-0 col-sm-0 col-0 "></div>
    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12 mt-4">
      <div class="container ps-3">
      <div class="container p-0">
        <div class="row">
        <h2 class="header-heading display-4 fw-bold">Pakistan's Largest Ecommerce Businnes Consultant.</h2>
        </div>
        <div class="row">
          <hr class="my-2 ms-3 main-hr ">
        </div>
        <div class="row my-3">
          <h4 class="fs-3 header-subheading text-white">Platform to provide business services to all companies & Inividuals about their Progress.</h4>
        </div>
        <div class="row my-4">
          <a href="services.php">
            <button class="header-button btn fs-5 px-5 ">Our Services</button>
          </a>          
        </div>
      </div>
      </div>
    </div>

    

    <!-- from-div -->

    

    <div class="col-lg-5 col-lg-6  col-xl-5 col-md-6 col-sm-12 col-12 mt-4   px-xl-5 px-lg-5 px-md-4 px-sm-3 px-3">
      <div class="wraping-div px-3 ps-2 mt-4">
      <div class="form-div container bg-white ">
        <div class="inner-div-form py-5 pb-4 px-sm-1">
        <div class="row fr">
          <span class="form-t1 fs-2 fw-bold">GET MEMBERSHIP</span>
        </div>
        <div class="row fr">
          <span class="form-t2 mt-1">We have solutions for all types of sellers.</span>
        </div>
        <div class="row fr">
          <hr class="mt-3 mx-auto  form-hr ">
        </div>
        <div class="row">
        <form action="mailto" method="POST" class="header-form px-4 pt-3  pb-2">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">I am here to…</label>
                <input type="email" name="form-email" class="form-control header-input text-dark" id="formGroupExampleInput" placeholder="Example input placeholder">
              </div>
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Choose category</label>
                <select class="form-select header-input text-dark" name="form-option" id="inputGroupSelect01">
                  <option selected >Choose...</option>
                  <option  value="1">Start selling on Amazon</option>
                  <option value="2">Grow my existing business</option>
                  <option value="3">This is all we need to start.</option>
                </select>
              </div>

              <div class="row ">
          <span class="kuch-nahi">This is all we need to start.</span>
        </div>
        <div class="row mt-3 fr">

          <!-- is ko yad say submit karna hai -->

          <input type="button" class="btn submit-button p-2  fs-5 " id="form-send-button" value="APPLY NOW">
        </div>
        </form>

            </div>
        

        
        </div>
        

      </div>
      </div>
    </div>
    <div class="col-xl-1 col-lg-0 col-md-0 col-sm-0 col-0  "></div>
  </div>
    
<div class="row margin-sm"></div>

</header>

<!--Second div-->

<div class="container-fluid">
    <div class="row margin-sm"></div>
    <div class="row">
        <div class=" col-xl-2 col-lg-2 col-md-1 "></div>
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
              <h2 class="display-5  what ">Do you need any assistance with your next project?</h2>
          </div>
        <div class="col-xl-2 col-lg-2 col-md-1 "></div>
    </div>

    <!-- gaping div -->


    <div class="row">
          <hr class="my-3 mx-auto page-hr ">
        </div>

      <div class="row">
        <div class=" col-xl-4 col-lg-3 col-md-2 col-sm-1 col-0 "></div>
          <div class=" col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12 ">
            <h4 class="fs-6 second-div-subheading mt-2">First, generate and add $1 billion in service sector and ecommerce exports annually by 2025 by enabling and empowering the people with the right skills and professional trainings.</h4>
          </div>
        <div class=" col-xl-4 col-lg-3 col-md-2 col-sm-1 col-0 "></div>
      </div>

</div>


<div class="container-fluid">
<div class="row margin-xsm"></div>

  <div class="row">
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-0 col-0"></div>
      <div class="col-xl-10 col-md-10 col-lg-10 col-sm-12 col-12 px-xl-0 px-lg-0 px-md-1 px-sm-3 px-5">
        <div class="row ">
          <!-- first Service -->
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 service-area">
            <div class="row">
              <img src="../images/AMAZON.png" class="w-25" alt="">
            </div>
            <div class="row my-2">
              <span class="fs-6 ps-0 service-label">Amazon Assistant</span>
            </div>
            <div class="row my-3 service-heading-div">
              <h4 class="fs-4 ps-0 service-heading">Start selling on Amazon</h4>
            </div>
            <div class="row my-3">
              <h5 class=" ps-0 service-text">Tools such as a profit and calculator tax show the value of your stock options and exercise cost.</h5>
            </div>

          </div>


          
            <!-- Second Service -->
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 service-area">
            <div class="row">
              <img src="../images/AMAZON.png" class="w-25" alt="">
            </div>
            <div class="row my-2">
              <span class="fs-6 ps-0 service-label">Amazon Assistant</span>
            </div>
            <div class="row my-3 service-heading-div">
              <h4 class="fs-4 ps-0 service-heading">Software Development</h4>
            </div>
            <div class="row my-3">
              <h5 class=" ps-0 service-text">Tools such as a profit and calculator tax show the value of your stock options and exercise cost.</h5>
            </div>
          </div>

          <!-- Third Service -->
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 service-area">
            <div class="row">
              <img src="../images/AMAZON.png" class="w-25" alt="">
            </div>
            <div class="row my-2">
              <span class="fs-6 ps-0 service-label">Amazon Assistant</span>
            </div>
            <div class="row my-3 service-heading-div">
              <h4 class="fs-4 ps-0 service-heading">SOCIAL MEDIA MARKETING</h4>
            </div>
            <div class="row my-3">
              <h5 class=" ps-0 service-text">Tools such as a profit and calculator tax show the value of your stock options and exercise cost.</h5>
            </div>
          </div>

        </div>
      </div>
    <div class="col-xl-1 col-lg-0 col-md-1 col-sm-0 col-0"></div>
  </div>

  <!-- all services button -->
  <div class="row">
   <div class="col-12  px-xl-0 px-lg-0 px-md-1 px-sm-3 px-5 d-flex justify-content-center">
      <a href="services.php">
        <button  class="btn services-button  px-5 py-3 mt-4  " >
           <span class="mx-xl-5 mx-lg-4 mx-md-3 mx-sm-3 mx-3  px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
            All Services
            </span>
       </button>
      </a>
   </div>
  </div>

  <div class="row margin-sm"></div>

</div>

<!-- -----3rd div---------->

  <div class="container-fluid About-div " id="3rd">
    <div class="row margin-md"></div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-6 about-img ">
        <img src="../images/xabout1.jpg.pagespeed.ic.A3308mYl3M (1).webp" class="about-img w-75" alt="">

        <div class="info-man text-center __web-inspector-hide-shortcut__">
          <div class="head-cap">
          <h3 class="display-5 fw-bold text-white">99%</h3>
          </div>
          <p>Customer Satisfaction</p>
        </div>
      </div>

      <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12 col-12 pb-5 ">
              <div class="container-fluid  px-5 ps-0">

                  <div class="row margin-xsm"></div>

                  <div class="row">
                    <h2 class="display-5 about-heading ">Start business in 3 easy steps</h2>
                  </div>
                  <div class="row my-3">
                    <span class="fs-6 loan-sub-heading">
                    Starting a business takes research, smarts and self-confidence — and a measure of fearlessness. You’ll ask yourself: How can I start my own business with no money? What's the right equipment? Am I getting the best advice? Here are the essential steps on how to start a business, including creating a solid business plan, securing financing, structuring your company and more.
                    </span>
                  </div>
                  <div class="row mb-3 mt-4 ">
                    <hr class="section-hr ms-3">
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">REGISTER BUSINESS</span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">CLIENT COMMUNICATION</span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">GET HIRED</span>
                    </div>
                  </div>

                  <div class="row margin-xsm"></div>

                  <div class="row button-row">
                    <div class="button-div">
                      <button class="loan-button btn btn-success px-5 py-3 fw-bold">LEARN MORE</button>
                    </div>
                  </div>


              </div>

            </div>

    </div>
    
    <div class="row margin-md"></div>
  </div>


  <!-- -----4th div----- -->


  <div class="container-fluid why-section">


    <div class="row margin-sm"></div>
    <div class="row">
        <div class=" col-xl-2 col-lg-2 col-md-1 "></div>
          <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
              <h2 class="display-5  what ">Why choose us?</h2>
          </div>
        <div class="col-xl-2 col-lg-2 col-md-1 "></div>
    </div>

    <!-- gaping div -->


        <div class="row">
          <hr class="my-3 mx-auto page-hr ">
        </div>

        <div class="row">
          <div class=" col-xl-4 col-lg-3 col-md-2 col-sm-1 col-0 "></div>
            <div class=" col-xl-4 col-lg-6 col-md-8 col-sm-10 col-12 ">
              <h4 class="fs-6 second-div-subheading mt-2">The brochure must grab a viewer’s attention and hold it long enough to deliver the pertinent information.</h4>
            </div>
          <div class=" col-xl-4 col-lg-3 col-md-2 col-sm-1 col-0 "></div>
        </div>

        <div class="row margin-xsm "></div>


        <div class="row reasons-div">
          <div class="col-xl-1 col-lg-1 col-md-1 col-sm-0 col-0"></div>
            <div class="col-xl-10 col-md-10 col-lg-10 col-sm-12 col-12">
              <div class="row ">
                <!-- first Reason -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2">
                  <div class="container">
                    <div class="row d-flex justify-content-center why-column ">
                      <div class="col-12 ">
                        <div class="img-div d-flex justify-content-center">
                          <img src="../images/services4.svg" class="" alt="">
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-center my-4">
                        <h4 class="fs-4 ps-0 why-heading">Dedicated teams</h4>
                      </div>

                      <div class="col-12 d-flex justify-content-center ms-1 mb-3">
                      <h5 class=" ps-0 why-text text-secondary">Tools such as a profit simulator and tax simulator calculator show the value of your stock options and exercise cost</h5>
                      </div>

                    </div>
                  </div>


                </div>

                <!-- second Reason -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2">
                  <div class="container">
                    <div class="row d-flex justify-content-center why-column">
                      <div class="col-12 ">
                        <div class="img-div d-flex justify-content-center">
                          <img src="../images/services5.svg" class="" alt="">
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-center my-4">
                        <h4 class="fs-4 ps-0 why-heading">True partners</h4>
                      </div>

                      <div class="col-12 d-flex justify-content-center ms-1 mb-3">
                      <h5 class=" ps-0 why-text text-secondary">Tools such as a profit simulator and tax simulator calculator show the value of your stock options and exercise cost</h5>
                      </div>

                    </div>
                  </div>


                </div>

                <!-- third Reason -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2">
                  <div class="container">
                    <div class="row d-flex justify-content-center why-column">
                      <div class="col-12 ">
                        <div class="img-div d-flex justify-content-center">
                          <img src="../images/services6.svg" class="" alt="">
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-center my-4">
                        <h4 class="fs-4 ps-0 why-heading">Just Time</h4>
                      </div>

                      <div class="col-12 d-flex justify-content-center ms-1 mb-3">
                      <h5 class=" ps-0 why-text text-secondary">Tools such as a profit simulator and tax simulator calculator show the value of your stock options and exercise cost</h5>
                      </div>

                    </div>
                  </div>


                </div>

                <!-- forth Reason -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 ">
                  <div class="container">
                    <div class="row d-flex justify-content-center why-column">
                      <div class="col-12 ">
                        <div class="img-div d-flex justify-content-center">
                          <img src="../images/services7.svg" class="" alt="">
                        </div>
                      </div>

                      <div class="col-12 d-flex justify-content-center my-4 ">
                        <h4 class="fs-4 ps-0 why-heading">Low Intreast</h4>
                      </div>

                      <div class="col-12 d-flex justify-content-center ms-1 mb-3 ">
                      <h5 class=" ps-0 why-text text-secondary">Tools such as a profit simulator and tax simulator calculator show the value of your stock options and exercise cost</h5>
                      </div>

                    </div>
                  </div>


                </div>


              </div>

              <div class="col-xl-1 col-lg-1 col-md-1 col-sm-0 col-0"></div>

            </div>

          </div>

          <div class="row margin-sm"></div>

  </div>

        




    <!-- ----5th div----- -->

    <div class="container-fluid get-loan ">

      <div class="row margin-md"></div>
      
      <div class="row">
        <div class="col-xl-1 col-lg-0 col-md-1 col-sm-1 col-0"></div>

        <div class="col-xl-10 col-lg-12 col-md-10 col-sm-10 col-12 ">
          
        <div class="container-fluid">
            <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-12 col-sm-12 col-12 pb-5 ">
              <div class="container-fluid  px-5 ms-2 ps-0">

                  <div class="row ps-2">
                    <h2 class="display-5 about-heading ">We believe in building high value</h2>
                  </div>
                  <div class="row my-3">
                    <span class="fs-6 ps-3   loan-sub-heading">
                    We connect, explore, create, empower and grow together.
                    </span>
                  </div>
                  <div class="row mb-3 mt-4 ">
                    <hr class="section-hr ms-3">
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">Creating Ideas with Passion</span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">On-Time & Within Budget</span>
                    </div>
                  </div>

                  <div class="row my-3">
                    <div class="col-1">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-circle-fill bullets mt-1" viewBox="0 0 16 16">
                      <circle cx="8" cy="8" r="8"/>
                      </svg>
                    </div>
                    <div class="col-11">
                      <span class="fs-5 bullet-label">Solutions For Revolution</span>
                    </div>
                  </div>

                  <div class="row margin-xsm"></div>

                  <div class="row button-row">
                    <div class="button-div">
                      <button class="loan-button btn btn-success px-5 py-3 fw-bold">LEARN MORE</button>
                    </div>
                  </div>


              </div>

            </div>

            <div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 col-12 ">
              <div class="container-fluid ">
                <img src="../images/2ndblock.jpg" class="w-100" alt="">
              </div>
            </div>
            </div>
        </div>

        </div>

        <div class="col-xl-1 col-lg-0 col-md-1 col-sm-1 col-0"></div>
      </div>

      <div class="row margin-sm"></div>


    </div>


    <!-- ----6th div slider----- -->

    <div class="container-fluid slider-section">
        
      <div class="row">
              <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>


        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">

          


        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="radio" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="radio" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="radio" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../images/slider2.png" class="d-block w-100  img-fluid" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="../images/slider3.png" class="d-block w-100 img-fluid" alt="...">
            
          </div>
          <div class="carousel-item">
            <img src="../images/slider2.png" class="d-block w-100 img-fluid" alt="...">
            
          </div>
        </div>
        
        </div>
        </div>

        <div class="col-xl-2 col-lg-2 col-md-1 col-sm-0 col-0"></div>
      </div>

    </div>



      <!-- ----7th div----- -->


      <section class="container-fluid">

      <div class="container-fluid">
        <div class="row margin-sm"></div>
        <div class="row">
            <div class=" col-xl-2 col-lg-2 col-md-1 "></div>
              <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-12">
                  <h2 class="display-5  news ">News & Trends 
</h2>
              </div>
            <div class="col-xl-2 col-lg-2 col-md-1 "></div>
        </div>

        <!-- gaping div -->


        <div class="row">
          <hr class="my-3 mx-auto news-hr ">
        </div>


      </div>

        <div class="row margin-xsm"></div>

        <!-- ---news Section--- -->

        <div class="row">

          <div class="col-xl-0 col-lg-0 col-md-0 col-sm-0 col-0"></div>

          <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 col-12 px-5">

            <!-- ----news starts here----- -->

            <div class="container-fluid">
              <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 news-column post mb-3">
                  <div class="row ">
                    <div class="image-div">
                      <img src="../images/news1.jpg" class="w-100 news-image" alt="">
                    </div>
                  </div>

                  <div class="row py-2 pt-3                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ">
                    <span class="news-date text-secondary fs-6">6 July 2022</span>
                  </div>

                  <div class="row my-2 news-heading-div">
                    <h4 class="fs-4 ps-0 news-heading">Management Consulting</h4>
                  </div>
                  <div class="row my-2 ">
                    <h5 class=" ps-0 news-text">Management consultants support their clients with all aspects of management and operations.</h5>
                  </div>
                  
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 news-column post mb-3">
                  <div class="row ">
                    <div class="image-div">
                      <img src="../images/news2.jpg" class="w-100 news-image" alt="">
                    </div>
                  </div>

                  <div class="row py-2 pt-3                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ">
                    <span class="news-date text-secondary fs-6">6 July 2022</span>
                  </div>

                  <div class="row my-2 news-heading-div">
                    <h4 class="fs-4 ps-0 news-heading">Digital Consulting</h4>
                  </div>
                  <div class="row my-2 ">
                    <h5 class=" ps-0 news-text">Digital consultants specialise in digital strategies, automation and technology implementation.</h5>
                  </div>
                  
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-4 my-2 news-column post mb-3">
                  <div class="row ">
                    <div class="image-div">
                      <img src="../images/news3.jpg" class="w-100 news-image" alt="">
                    </div>
                  </div>

                  <div class="row py-2 pt-3                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ">
                    <span class="news-date text-secondary fs-6">6 July 2022</span>
                  </div>

                  <div class="row my-2 news-heading-div">
                    <h4 class="fs-4 ps-0 news-heading">HR Consulting</h4>
                  </div>
                  <div class="row my-2 ">
                    <h5 class=" ps-0 news-text">HR consultants support their clients with all aspects of human capital and the delivery of HR services.</h5>
                  </div>
                  
                </div>



              </div>
            </div>

          
          </div>

          <div class="col-xl-0 col-lg-0 col-md-0 col-sm-0 col-0"></div>

        </div>

        <div class="row">
   <div class="col-12  px-xl-0 px-lg-0 px-md-1 px-sm-3 px-5 d-flex justify-content-center">
      <a href="blog.php">
        <button  class="btn services-button  px-5 py-3 mt-4  " >
           <span class="mx-xl-5 mx-lg-4 mx-md-3 mx-sm-3 mx-3  px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
            Latest News</span>
       </button>
      </a>
   </div>
  </div>

        <div class="row margin-sm"></div>

        





      </section>


      <!-- ----footer----- -->


      <footer class="container-fluid foooter-div">
            <div class="row margin-sm"></div>

        <div class="row">

        <div class="col-xl-1 col-lg-0 col-md-1 col-sm-0 col-0"></div>

        <div class="col-xl-10 col-lg-12 col-md-10 col-sm-12 col-12 ">

            <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 px-xl-5 px-lg-5 px-md-5 px-sm-4 px-4 my-2">
                <div class="container-fluid">
                <div class="row py-2">
                    <img src="../images/color-logo.png" class="w-100" alt="">
                </div>
                <div class="row pb-4 pt-3 pe-2  ">
                    <h5 class=" ps-0 footer-text-p">Tools such as a profit simulator and tax calculator show the value of your stock options and exercise cost.</h5>
                </div>
                </div>

            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 px-3 my-2">
                <div class="container-fluid">
                <div class="row py-2">
                    <h3 class="fs-5 ">Quick Links</h3>
                </div>
                <div class="row py-2 ps-2 ">
                <a href="#" class=" ps-2 footer-text footer-link">Work</a>
                </div>
                <div class="row py-2 ps-2 ">
                <a href="#" class=" ps-2 footer-text footer-link">Services</a>
                </div>
                <div class="row py-2 ps-2 footer-link">
                <a href="#" class=" ps-2 footer-text ">Products</a>
                </div>
                <div class="row py-2 ps-2 footer-link">
                <a href="#" class=" ps-2 footer-text ">Tips & Tricks</a>
                </div>

                </div>

            </div>


            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-12 px-3 my-2">
                <div class="container-fluid">
                <div class="row py-2">
                    <h3 class="fs-5 ">Solution</h3>
                </div>
                <div class="row py-2 ps-2 footer-link">
                <a href="#" class=" ps-2 footer-text ">Air freight</a>
                </div>
                <div class="row py-2 ps-2 footer-link">
                <a href="#" class=" ps-2 footer-text ">Ocean freight</a>
                </div>
                <div class="row py-2 ps-2 footer-link ">
                    <a href="#" class=" ps-2 footer-text ">Large projects</a>
                </div>  

                </div>

            </div>


            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 ps-3 my-2 mx-sm-auto ">
            <div class="container-fluid">
                <div class="row py-2">
                    <h3 class="fs-5 ">Newsletter</h3>
                </div>
                <div class="row py-2 ps-2 ">
                <h5 class=" ps-0 footer-text text-secondary">Subscribe newsletter to get updates.</h>
                </div>

                <div class="row py-2 ps-0 me-xl-0 me-lg-0 me-md-2 me-sm-3 me-3 ">

                    <div class="container-fluid ms-2">
                        <div class="row searchbar p-1 ">
                            <div class="col-1 search-gap py-1 ps-0 pe-0 me-0 "></div>
                            <div class="col-9 p-0 m-0 ">
                                 <input type="text" class="input py-3 px-0 m-0" placeholder="Enter your email" style='text-transform:uppercase'>
                            </div>
                            <div class="col-2 p-0 ">
                                 <div class="icon mt-2  ms-1  d-flex">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="text-white bi bi-send-fill" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                        </svg> -->
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2" viewBox="0 0 16 16">
                            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                        </svg> -->
                        
                                <button class=" mt-2 ms-0 footer-send-button d-flex justify-content-center ">
                                     <img src="../images/icon-send.svg" class=" footer-send-button-img" alt="">
                                </button>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="container-fluid ms-2">
                    <div class="row py-2  mt-3  ">

                        <div class="footer-social mt-30 px-0 ">
                        <a href="https://www.facebook.com/aliableconsultants" target="blanck">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-facebook social-media-icons me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                        </a>

                        <a href="https://instagram.com/aliable_consultants?igshid=YmMyMTA2M2Y=" target="blanck">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram social-media-icons me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                        </a>

                        <a href="https://pk.linkedin.com/in/aliable-consultants-884bab243?trk=profile-badge" target="blanck">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-tiktok social-media-icons me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" viewBox="0 0 16 16">
                            <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                        </svg>
                        </a>

                        <a href="https://pk.linkedin.com/in/aliable-consultants-884bab243?trk=profile-badge" target="blanck">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-linkedin social-media-icons me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                        </a>

                        <a href="//api.whatsapp.com/send?phone=923138275277" target="blanck" title="let's have some Words">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-whatsapp social-media-icons me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                            </svg>
                        </a>

                        <a href="https://pk.linkedin.com/in/aliable-consultants-884bab243?trk=profile-badge" target="blanck" title="let's have some Words" class="">
                            <img src="../images/upwork.png" width="24" height="24" fill="currentColor" class="bi bi-whatsapp social-media-icons social-media-icons-img me-xl-4 me-lg-4 me-md-3 me-sm-3 me-3" alt="">
                        </a>

                        <a href="//api.whatsapp.com/send?phone=923138275277" target="blanck" title="let's have some Words"  class="">
                            <img src="../images/fiverr.png" width="24" height="24" fill="currentColor" class="bi bi-whatsapp social-media-icons social-media-icons-img " alt="">
                        </a>
                        </div>

                        </div>
                    </div>
                    

                    
                </div>
                </div>

            </div>
                
            </div>

            <div class="container-fluid">
                <div class="row">

                </div>
            </div>


            <div class="row ending-lines py-3 pt-4">
                <div class="col-12">
                    <hr class="text-secondary">
                </div>
                <div class="col-1"></div>
                <div class="col-10">
                <span class=" fw-sm-light fw-light text-secondary copyright-text">&copy;Copyrights  Reserved By Aliable Group fo Organizations
                    <span style="font-weight:750">|</span> Proudly Designed with 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="heart bi bi-heart-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                    </svg>
                    By <font color="#10c98f" title="Making Dreams True ">Acute Developers</font></span>
                </div>
                <div class="col-1"></div>
                
            </div>



        </div>



        <div class="col-xl-1 col-lg-0 col-md-1 col-sm-0 col-0"></div>


        </div>



        

        <!-- <div class="row margin-sm"></div> -->





    </footer>



          <!-- non usable data -->

          <div class="non-usable-data d-none">
            
      <!--3rd  div-->

<!-- <div class="third-div container-fluid">
    <div class="row margin-xsm"></div>
    <div class="row">
    <h2 class="display-2 what-2">Featured Collection</h2>
    </div>
    <div class="row margin-sm"></div>

    <div class="container-fluid display-product">
      
    <div class="row"> -->


    <?php

// $allproductquery ="SELECT * FROM products";

// $productresult=$con->query($allproductquery);

// if($productresult->num_rows>0)
// {
// while($row=$productresult->fetch_assoc())
// {


//     if($row['display']!==null){
//         if($row['deleted_at']==NULL)
//     {
//         echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 pb-3">';
// echo '<div><img src="'.$row['product_image'].'" class="h-100 w-100 display-img" alt=""></div>';

// echo '<div class="quote">'.$row['product_name'].'</div>';
// echo '<div style="color: green;"><b>'.$row['product_price'].' <i>Rs</i></b></div>';
// echo '<div>'.$row['product_description'].'</div>';
// echo '</div>';
//     }
//     }

//     }   

// }


?>
    <!-- </div>
    <div class="row margin-xsm"></div>
    </div>

    


</div> -->

<!--4th div-->

<div class="container-fluid">
    <div class="row margin-sm"></div>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h2 class="display-2 what">Popular Collection</h2>
        </div>
        <div class="col-3"></div>
        <div class="row margin-sm"></div>
    </div>
</div>

<!--product-container-->

<div class="container-fluid product-section">
<div class="row margin-xsm"></div>

  <div class="row py-5">

  <?php
  $allproductquery ="SELECT * FROM products";

$productresult=$con->query($allproductquery);

if($productresult->num_rows>0)
{
while($row=$productresult->fetch_assoc())
{


    if($row['display']!==null){
        if($row['deleted_at']==NULL)
    {
        echo '<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 pb-3 product-hai">';

echo '<div class="image-design pt-3">';
echo '<div><img src="'.$row['product_image'].'" class="h-100 w-100 display-img" alt=""></div>';
echo '</div>';

echo '<div class="quote">'.$row['product_name'].'</div>';
echo '<div style="color: green;"><b>'.$row['product_price'].' <i>Rs</i></b></div>';
echo '<div>'.$row['product_description'].'</div>';
echo '</div>';
    }
    }

    }   

}


?>

  </div>
</div>


<!--5th div-->

<div class="container-fluid">
   <div class="row margin-md"></div>
  <div class="row main-5th">

    <div class="col-1"></div>
    <div class="col-4">
      <div class="row margin-sm"></div>
      <img src="../images/awais.jpeg" class="img-fluid w-75 " alt="">
      <div class="row margin-sm"></div>
    </div>
    <div class="col-6 ">
      <div class="container-fluid">
        <div class="row margin-sm"></div>
        <div class="row">
          <span class="story-heading display-6">True Story</span>
        </div>
        <div class="row margin-xsm"></div>
        <div class="row ">
          <div class="col-10 story-para">
          <span class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae enim nostrum quos, aliquam est nulla et laudantium inventore obcaecati ipsum voluptas deleniti unde explicabo esse optio ratione dicta molestias neque mollitia? Distinctio fuga magni illo </span>
          </div>
          <div class="col-2"></div>
        </div>
      </div>

      <div class="row margin-xsm"></div>

      <div class="row story-teller">
      <div class="col-10">
      <span class="display-6">Mr.Awais Rao</span>
      </div>
      <div class="col-2"></div>
    </div>

    </div>

    <div class="col-1 bg-white"></div>

  </div>
  
</div>



<!--6th div-->

<div class="container-fluid banner float-end">
  <div class="row floating-div pt-4">
  
  </div>

  <div class="row pt-5">
</div>

</div>


<div class="container-fluid">
  <div class="row margin-lg"></div>
  <div class="row margin-lg"></div>
  <div class="row margin-sm"></div>

</div>

<!-- 7th div -->

<div class="container-fluid banner-2">
  <div class="row pt-4">
    <div class="col-4 ps-5">
        <h1 class="banner-heading display-4">Amazon<br>Consaltant</h1>
        <h4 class="banner-para mt-3">Providing Everthing Amazon<br>Seller need to Succeed.</h4>
        <button class="btn banner-button px-5 py-2 mt-4">Get Started</button>
    </div>
    <div class="col-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <img src="../images/AMAZON.png"class="w-50 mt-4 ms-5" alt="">
          </div>
          <div class="col-8">
            <h4 class="inner-heading mt-4 text-white">Amazon Seller Consaltant</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-4"></div>
          <div class="col-8">
            <span class="inner-text text-white">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia exercitationem laborum aperiam eum doloremque natus?
            </span>
          </div>
        </div>
      </div>


      <div class="container-fluid mt-4 ">
        <div class="row">
          <div class="col-4">
            <img src="../images/AMAZON.png"class="w-50 mt-4 ms-5" alt="">
          </div>
          <div class="col-8">
            <h4 class="inner-heading mt-4 text-white">Amazon Seller Consaltant</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-4"></div>
          <div class="col-8">
            <span class="inner-text text-white">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia exercitationem laborum aperiam eum doloremque natus?
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-4">
    <div class="container-fluid">
        <div class="row img-row">
          <div class="col-4">
            <img src="../images/AMAZON.png"class="w-50 mt-4 ms-5" alt="">
          </div>
          <div class="col-8">
            <h4 class="inner-heading mt-4 text-white">Amazon Seller Consaltant</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-4"></div>
          <div class="col-8">
            <span class="inner-text text-white">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia exercitationem laborum aperiam eum doloremque natus?
            </span>
          </div>
        </div>
      </div>


      <div class="container-fluid mt-4">
        <div class="row">
          <div class="col-4 ">
            <img src="../images/AMAZON.png"class="w-50 mt-4 ms-5" alt="">
          </div>
          <div class="col-8">
            <h4 class="inner-heading mt-4 text-white">Amazon Seller Consaltant</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-4"></div>
          <div class="col-8">
            <span class="inner-text text-white">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia exercitationem laborum aperiam eum doloremque natus?
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row pt-5">
</div>

</div>

<div class="container-fluid">
  <div class="row margin-sm"></div>
</div>
          </div>


<!-- <footer class="footer container-fluid">
  <div class="row margin-sm"></div>
  <div class="row">

  <div class="col-3">
    <div class="row mt-3">
      <div class="col-3"><img src="../images/whilte-logo.png" class="w-100  ms-4 img-fluid" alt=""></div>
      <div class="col-9 mt-3">
        <span class="text-white fs-5 mt-3 ">Aliable Consultant</span>
      </div>
    </div>
    <div class="row">
      <img src="../images/whilte-logo.png" class="opacity-25 w-100 dim-logo" alt="">
    </div>
  </div>
   
    
    <div class="col-2 ">
      <h2 class="py-3 mt-5 text-white fs-3">Shop Now</h2>
      <h2 class="py-3 text-white fs-3">Contact Us</h2>
      <h2 class="py-3 text-white fs-3">Discount</h2>
    
    </div>
    <div class="col-2">
    <h2 class="py-3 mt-5 text-white fs-3">About Us</h2>
      <h2 class="py-3 text-white fs-3">Services</h2>
      <button class="mt-3 btn-primary btn ">Learn More</button>
      <h2></h2>
    </div>
    <div class="col-2">
      <div class="row">
        <div class="row margin-sm"></div>
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook text-white" viewBox="0 0 16 16">
  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">Facebook</span>
        </div>
      </div>


      <div class="row">
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram text-white" viewBox="0 0 16 16">
  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">Instagram</span>
        </div>
      </div>


      <div class="row ">
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp text-white" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">whatsApp</span>
        </div>
      </div>


      <div class="row">
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-fill text-white" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">E-mail</span>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin text-white" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">LinkedIn</span>
        </div>
      </div>

      <div class="row">
        <div class="col-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-tiktok text-white" viewBox="0 0 16 16">
  <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
</svg>
        </div>
        <div class="col-9 mb-3">
          <span class="social text-white fs-5 ">Tik Tok</span>
        </div>
      </div>


    </div>


    <div class="col-3 ">

    <div class="backgroundcolor pe-2 ">
 <form action="">

        <h3 class=" text-secondary display-6 form-heading">Contact Us</h3>
            
              <div class="form-floating mt-4 ">
                <input type="text" class="form-control" id="floatingInputGrid"  placeholder="john">
                <label for="floatingInputGrid">Enter name</label>
              </div>
              
              
              <div class="form-floating mt-2">
                <input type="tel" class="form-control" id="floatingInputGrid"  placeholder="+9200000000000">
                <label for="floatingInputGrid">Contact Number</label>
              </div>
              
              
              <div class="form-floating mt-2">
                <input type="email" class="form-control" id="floatingInputGrid" placeholder="john@.com">
                <label for="floatingInputGrid">Email</label>
              </div>
              
              <div class="form-floating mt-2 ">
                <input type="text" class="form-control" id="floatingInputGrid" placeholder="Adress">
                <label for="floatingInputGrid">Adress</label>
              </div>


<div class="row">
    .<div class="">
        <button class="btn btn-primary submit-button">Submit</button>
    </div>
</div>
            
    </form>

</div>

    </div>
  </div>
  

  <div class="row ending-lines py-3 pt-4">
    <div class="col-4">
      <span class="text-secondary">&copy;Copyrights  Reserved By Aliable Group fo Organizations</span>
    </div>
    <div class="col-5">
      <hr class="text-secondary">
    </div>
    <div class="col-3">
    <span class="text-secondary">Proudly Designed By <font color="white">Acute Developers</font></span>
    </div>
    
  </div>

</footer> -->

  <div id="vanish" class="fade-in">

    <!--whatsApp button-->
    <div id="myButton"></div>

    <!-- call button -->
        <a href="tel:+923034817820" class="call-float-button">
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="text-white p-0 call-float-icon  bi bi-phone-fill" viewBox="0 0 16 16">
                <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
              </svg>
        </a>

 


      <!-- social-media buttons -->


      <div class="side-box" >


          <a href="https://www.facebook.com/aliableconsultants" target="blanck" class="text-decoration-none">
            <div class="s-facebook s-platform">
              <img src="../images/facebook-logo.png" class="platform-icon  me-1 " alt="">
              <span class="platform-name">Facebook</span>
            </div>
          </a>

          <a href="https://www.instagram.com/aliable_consultants/?igshid=YmMyMTA2M2Y%3D" target="blanck" class="text-decoration-none">
            
          <div class="s-instagram s-platform">
              <img src="../images/instagram-logo.png" class="platform-icon   " alt="">
              <span class="platform-name">Instagram</span>
            </div>
          </a>

          <a href="" class="text-decoration-none">
            <div class="s-tweeter s-platform">
              <img src="../images/twitter-logo.png" class="platform-icon twitter-icon  " alt="">
              <span class="platform-name">Twitter</span>
            </div>
          </a>

          <a href="https://pk.linkedin.com/in/aliable-consultants-884bab243?trk=profile-badge" target="blanck"  class="text-decoration-none">
            <div class="s-linked-in s-platform">
              <img src="../images/linkedin-logo.png" class="platform-icon twitter-icon linked-icon" alt="">
              <span class="platform-name">Linked in</span>
            </div>
          </a>
      

        
      </div>

  </div>











       
</body>







  <!-- whatsapp functions -->
  <script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '+923138275277',
            popupMessage: 'Ask any Question ?',
            message: "What are your Services?",
            showPopup: true,
            showOnIE: false,
            position: '',
            size: '55px',
            headerTitle: 'Welcome!',
            headerColor: '#25D366',
            backgroundColor: '#25D366',
            buttonImage: '<img src="../images/whatsapp.png" />'
        });
    });

    
</script>

  <script type="text/javascript">

       
                //Get the button
            let mybutton = document.getElementById("vanish");


            $( document ).ready(function() {
            // we ready for fire action with JQery.

             // When the user scrolls down 20px from the top of the document, show the button
             window.onscroll = function () {
                scrollFunction();
            };
        });
           

            function scrollFunction() {
                if (
                document.body.scrollTop > 200 ||
                document.documentElement.scrollTop > 200
                ) {
                mybutton.style.display = "block";
                } else {
                mybutton.style.display = "none";
                }
            }


  </script>










</html>