<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Templates | For Resumes</title>

  <!-- Bootstrap CSS -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
  <!-- linking library file which is extracted in lib folder  -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/9f6d055f67.js" crossorigin="anonymous"></script>

  <!-- style sheets -->
  <link rel="stylesheet" href="style.css" />
  <!-- icon -->
  <link rel="icon" href="favicon_io (1)/favicon-16x16.png" />
</head>

<body>

  <!--  including navbar -->


  <?php   include('nav.html'); ?>



  <!-- header of the template section ------- -->
  <div class="main-header">
    <div class="temp_header">
      <h2>Why do u want to build your resume?</h2>
      <p>
        <span class="temp_header_text">Resume Templates</span> help to build ur
        career
      </p>
      <p>We will help you in it.</p>
    </div>

    <div class="outer_header">
      <h2>Excited to Join us</h2>
      <a href="signup.php"><button class="btn btn-light btn-lg">Join Us</button></a>
    </div>
  </div>

  <!--  end of template section  -->



  <!-- features for templates cv and resumes-------------- -->





  <!-- portfolio section -- describes a datafilter which have different sections for  the respective buttons -->

  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="section-header">
        <h3 class="section-title">Portfolio</h3>
        <p class="section-description">
          Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque
        </p>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <!--     data-filters for the portfolio-wrapper       -->

            <li data-filter="all" class="filter active">All</li>
            <li data-filter="app" class="filter">App</li>
            <li data-filter="card" class="filter">Card</li>
            <li data-filter="logo" class="filter">Logo</li>
            <li data-filter="web" class="filter">Web</li>
          </ul>
        </div>
      </div>
    
      <!--  filters of portfolio -section   -->

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item app">
          <a href="">
            <img src="images/portfolio/app1.jpg" alt="" />
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item web">
          <a href="">
            <img src="images/portfolio/web2.jpg" alt="" />
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item app">
          <a href="">
            <img src="images/portfolio/app3.jpg" alt="" />
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item card">
          <a href="">
            <img src="images/portfolio/card1.jpg" alt="" />
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item card">
          <a href="">
            <img src="images/portfolio/app1.jpg" alt="" />
            <div class="details">
              <h4>Card 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item web">
          <a href="">
            <img src="images/portfolio/web3.jpg" alt="" />
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item card">
          <a href="">
            <img src="images/portfolio/card3.jpg" alt="" />
            <div class="details">
              <h4>Card 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item app">
          <a href="">
            <img src="images/portfolio/app2.jpg" alt="" />
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item logo">
          <a href="">
            <img src="images/portfolio/logo1.jpg" alt="" />
            <div class="details">
              <h4>Logo 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item logo">
          <a href="">
            <img src="images/portfolio/logo3.jpg" alt="" />
            <div class="details">
              <h4>Logo 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item web">
          <a href="">
            <img src="images/portfolio/web1.jpg" alt="" />
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item logo">
          <a href="">
            <img src="images/portfolio/logo2.jpg" alt="" />
            <div class="details">
              <h4>Logo 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end of portfolio-section  -->





  <!-- Customers reaction  -describes the feedback given by the customers ---- -->

  <section id="customer">
    <h3>See What customers had to say</h3>

    <div class="row">
      <div class="col-lg-3">
        <div class="customer-img">
          <img src="images/team-1.jpg" alt="customer-img" />

          <p>Excellent !! Easy to use and comfortable</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="customer-img">
          <img src="images/team-2.jpg" alt="customer-img" />

          <p>Excellent !! Easy to use and comfortable</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="customer-img">
          <img src="images/team-3.jpg" alt="customer-img" />

          <p>Excellent !! Easy to use and comfortable</p>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="customer-img">
          <img src="images/team-4.jpg" alt="customer-img" />

          <p>Excellent !! Easy to use and comfortable</p>
        </div>
      </div>

    </div>



  </section>
  <!-- end of customer section -------- -->






  <!-- - experts session  describes the feeback and suggestions  given by the  Professionals who have used our product --- -->

  <section id="experts">
    <h3>See what Experts had to suggest</h3>

    <div class="row">


      <div class="col-lg-6">
        <div class="img-holder">
          <img src="images/team-1.jpg" alt="name">


        </div>

        <div class="name-holder">

          <b>Rohit Mehra </b>
          <div class="linkedin">
            <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>

          <br>
          <p>Professer of Michel University</p>
        </div>

        <p><q>When I consult people on resume writing, the most common question that I am asked, it <br>is about the
            content and what components to add or avoid, there where they have less <br>than 5 years of work experience.
            On this platform, you not only have access to many options, <br> but you get guidance on what to choose and
            why. When the work experience is<br> less than 5 years, the other components such as languages, projects,
            volunteering experiences, <br> hobbies etc, they make a huge difference. The platform guides you through
            <br>different options helping you decide for the most relevant components to add to your<br> resume.

          </q></p>

      </div>




      <div class="col-lg-6">
        <div class="img-holder">
          <img src="images/team-2.jpg" alt="name">


        </div>

        <div class="name-holder">

          <b>Krishna Mehra </b>
          <div class="linkedin">
            <a href="#"><i class="fab fa-linkedin-in fa-2x"></i></a>
          </div>

          <br>
          <p>Professer of MAKAUT University</p>
        </div>

        <p><q>When I consult people on resume writing, the most common question that I am asked, it <br>is about the
            content and what components to add or avoid, there where they have less <br>than 5 years of work experience.
            On this platform, you not only have access to many options, <br> but you get guidance on what to choose and
            why. When the work experience is<br> less than 5 years, the other components such as languages, projects,
            volunteering experiences, <br> hobbies etc, they make a huge difference. The platform guides you through
            <br>different options helping you decide for the most relevant components to add to your<br> resume.

          </q></p>

      </div>
    </div>

  </section>


  <!-- end of experts session --------- -->



  <!-- doubt section arises due to  the doubt clearning activities provided by us  -->
  <section id="doubt">

    <div class="card">


      <div class="card-body">
        <h5 class="card-title">Do you have any doubt ?</h5>
        <p class="card-text">With supporting templates you could easily create your own resume</p>
        <a href="#" class="btn btn-primary">Contact Now</a>
        <a href="#" class="btn btn-outline-primary">Need Guidance</a>

      </div>
    </div>

  </section>
  <!-- end of doubt section --------- -->






  <!--  including footer -->


  <?php include('footer.html'); ?>

  <!-- end of footer --------- -->




    
  <!--    jquery cdn  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

  <!--  linking index.js  -->
  <script src="index.js"></script>

</body>

</html>