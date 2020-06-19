<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geeks God | Resume Builder</title>

  <!-- link templates -->
  <link rel="Templates" href="Templates.html">
  
  
  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/9f6d055f67.js" crossorigin="anonymous"></script>

  <!-- linking stylesheet ---- -->
  <link rel="stylesheet" href="style.css">

  <!-- linking favicon  -->
  <link rel="icon" href="Favicon/favicon-16x16.png">
</head>

<body>






  <!-- navbar -->




  <!--   included navbar in index.php (home) -->

  <?php include('nav.html'); ?>





  <!-- Title of our resume website----- -->

  <div class="title-card card text-center">

    <div class="card-body">
      <h5 class="card-title">Create and Download your Resume</h5>
      <p class="card-text">Register below to create awesome templates for your Resume</p>


      <a href="signup.php" class=" btn  btn-success btn-lg ">Register</a>
    </div>
  </div>

  <!-- end of title-card    -->






  <!-- This carousal  consists of examplaes of various templates provided to the customers to use -------- -->

  <div id="carouselExampleIndicators" class="carousel slide slider" data-ride="carousel" data-interval="10000">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/1.jpg" alt="First slide">

        <div class="carousel-caption  d-md-block">
          <!-- caption -->
          <h5> Build Free Resumes for Your Career </h5>

        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
        <div class="carousel-caption  d-md-block">
          <!-- caption -->
          <h5> Build Free Resumes for Your Career </h5>

        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="images/3.jpg" alt="Third slide">
        <!-- caption  -->
        <div class="carousel-caption  d-md-block ">
          <h5> Build Free Resumes for Your Career </h5>

        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



  <!-- end of carousal  -->




  <!-- ---------Features section ------------------->
  <!-- This is the features section which consists of the features that we are providing --- -->

  <!-- Features -->

  <section id="features">


    <div class="container" id="container-feature-box">

      <div class="row">
        <div class="feature-text">
          <h2>Everything we can do for you</h2>
        </div>
      </div>


      <div class="row">


        <div class="feature-box col-lg-3 col-md-6 ">
          <center><i class="far fa-window-restore fa-3x"></i> </center>

          <center>
            <h4>Intersting Templates</h4>
          </center>
          <center>

            <p>Create from a huge desirable group of Templates</p>

          </center>
        </div>

        <div class="feature-box col-lg-3 col-md-6">
          <center><i class="fas fa-bullseye fa-3x icon"></i></center>
          <center>
            <h4>Easy to use</h4>
          </center>
          <center>
            <p>Change ,customize and edit your Resume</p>
          </center>

        </div>

        <div class="feature-box col-lg-3 col-md-6 ">
          <center><i class="far fa-list-alt fa-3x"></i></center>

          <center>
            <h4>List of objectives</h4>
          </center>
          <center>

            <p>We create a list of insights for your benefit</p>

          </center>
        </div>



        <div class="feature-box col-lg-3 col-md-6">
          <center><i class="fas fa-mobile-alt fa-3x"></i></center>
          <center>
            <h4>Mobile Optimiztion</h4>
          </center>
          <center>
            <p> tips & tricks that'll help you stand out.</p>
          </center>

        </div>
        <div class="btn-feature-box">
          <a href="signup.php"><button class="btn  btn-lg ">Start</button></a>

        </div>


      </div>

    </div>
  </section>


  <!-- end of feature section ----- -->







  <!-- Four template examples   are the example of templates  for the professional ,students
  interns ,Bachelors, and Experienced candidates -------- -->


  <section id="four-templates">

    <div class="row">

      <div class="home-center-text">
        <h5>Not sure how to make a resume check out our templates</h5>
      </div>

      <div class="four-template-img col-lg-3  col-md-6">
        <a href="#">
          <p>Professional</p>
          <img src="images/portfolio/app1.jpg" width="280px" height="230px" alt="portfolio">
        </a>
      </div>

      <div class="four-template-img col-lg-3 col-md-6">
        <a href="#">
          <p>Students</p>
          <img src="images/portfolio/app2.jpg" width="280px" height="230px" alt="portfolio">
        </a>
      </div>

      <div class="four-template-img col-lg-3 col-md-6">
        <a href="#">
          <p>Bachelors</p>
          <img src="images/portfolio/app3.jpg" width="280px" height="230px" alt="portfolio">
        </a>
      </div>

      <div class="four-template-img col-lg-3 col-md-6">
        <a href="#">
          <p>Experienced</p>
          <img src="images/portfolio/app1.jpg" width="280px" height="230px" alt="portfolio">
        </a>
      </div>

      <div class="btn-four-template">
        <a href="Templates.php"><button class="btn  btn-lg ">Get free Template</button></a>

      </div>

    </div>

  </section>



  <!-- end of four -template section ------ -->




  <!--------- benefits ------------------- -->

  <!--  This section provides us the benefits of using our website .It says the advantages of using our product. -->
  <section id="benefits">
    <div class="container">
      <h2>Benefits</h2>

      <div class="row">

        <div class="col-lg-6">

          <i class="fas fa-th-large fa-3x"></i>
          <h3>A Resume layout</h3>
          <p>A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes sure
            all your content is aligned and organized so your resume looks like a work of art.</p>

        </div>

        <div class="col-lg-6">
          <i class="fas fa-chart-line fa-3x"></i>
          <h3>Best Resume Templates</h3>
          <p>A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes sure
            all your content is aligned and organized so your resume looks like a work of art.</p>


        </div>
      </div>


      <div class="row">

        <div class="col-lg-6">

          <i class="fas fa-pen-alt fa-3x"></i>
          <h3>Best cover Letters</h3>
          <p>A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes sure
            all your content is aligned and organized so your resume looks like a work of art.</p>

        </div>

        <div class="col-lg-6">
          <i class="far fa-check-circle fa-3x"></i>
          <h3>Suggestions by Experts</h3>
          <p>A creative, professional layout can grab a recruiter's attention. Our resume layout optimizer makes sure
            all your content is aligned and organized so your resume looks like a work of art.</p>


        </div>
      </div>



    </div>



  </section>


  <!-- end of benefits ----- -->



  <!-- This section consists of customer feedback  and it includes our sponcers/ press  section included. -->

  <!-- Testimonials -->

  <section id="testimonials">


    <div id="testimonial-carousel" class="carousel slide slider" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#testimonial-carousel" data-slide-to="1"></li>
      </ol>
      <div class="carousal-inner">



        <div class="carousel-item active">
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <p class="testimonial-text">Thanks for giving me an oppertunity to customize my resume.
            I am pleased to make my resume as a wanted it to be <i class="fas fa-heart fa-2x"></i></p>
          <p>Pebbles, New York</p>

        </div>

        <div class="carousel-item">
          <img class="testimonial-image" src="images/lady-img.jpg" alt="lady-profile">
          <p class="testimonial-text">Thanks for giving me an oppertunity to customize my resume.
            I am pleased to make my resume as a wanted it to be <i class="fas fa-heart fa-2x"></i></p>
          <p>Pebbles, New York</p>

        </div>
      </div>


      <!-- press section     includes our press images. --------- -->

      <section id="press">
        <img class="press-img" src="images/techcrunch.png" alt="tc-logo">
        <img class="press-img" src="images/tnw.png" alt="tnw-logo">
        <img class="press-img" src="images/bizinsider.png" alt="biz-insider-logo">
        <img class="press-img" src="images/mashable.png" alt="mashable-logo">
      

      </section>
      <!-- end of press section ---- -->

    </div>





  </section>

  <!-- end of testimonial section ----- -->







  <!-- this is the hiring section ---- -->
  <section id="hired">
    <h1>Where are they getting hired ?</h1>
    <div class="hired-images">

      <img src="https://img.icons8.com/color/104/000000/google-logo.png">
      <img src="https://img.icons8.com/metro/104/000000/mac-os.png">
      <img src="images/image-asset.jpeg" alt="Airbnb" width="200px">
      <img src="https://img.icons8.com/ios-filled/100/000000/amazon.png" />
      <img src="https://img.icons8.com/color/144/000000/microsoft.png" />

    </div>


  </section>

  <!-- end of hiring section ----- -->











  <!-- included footer  -->

  <?php   include('footer.html'); ?>
  

  <!-- end of footer -->



  <!--   bootstrap  cdn of jquery ------ -->

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  
  
    <!-- linking  index.js  file   -->

  <script src="index.js" charset="UTF-8">
  </script>













</body>


</html>