
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
    integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <header>
    <div class="top_header">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="th-left">
              <ul class="icon_list">
                <li><a href=""><span><i class="fa-solid fa-phone"></i></span> <span>0123456789</span></a></li>
                <li><a href=""><span><i class="fa-solid fa-envelope"></i></span> <span>info@techkillacademy.com</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="th-right">
              <ul class="icon_list">
                <li><a href=""><span><i class="fa-brands fa-facebook-f"></i></span></a></li>
                <li><a href=""><span><i class="fa-brands fa-instagram"></i></span></a></li>
                <li><a href=""><span><i class="fa-brands fa-youtube"></i></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">Techskillacademy</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Explore Courses
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="introduction-to-data-analytics.php">Introduction to Data Analytics</a></li>
                  <li><a class="dropdown-item" href="data-analysis-with-python.php">Data Analysis With Python</a></li>
                  <li><a class="dropdown-item" href="ibm-data-analyst.php">IBM Data Analyst</a></li>
                  <li><a class="dropdown-item" href="managing-data-analysis.php">Managing Data Analysis</a></li>
                  <li><a class="dropdown-item" href="data-analysis-with-interpretation.php">Data Analysis With Interpretation</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
              </li>
            </ul>
            <span class="navbar-text">
              <?php 
              if (isset($_SESSION['loginSuccess']) && $_SESSION['loginSuccess'] != "") {
                echo "<a href='my-profile.php' style='margin-right: 15px;'><img src='assets/image/user-icon.png' width='30px' class='img-fluid'></a><a href='logout.php' class='header_login_btn'>Logout</a>";
              } else {
                echo "<a href='login.php' class='header_login_btn'>Login</a>";
              }
               ?>
            </span>
          </div>
        </div>
      </nav>
    </div>
  </header>