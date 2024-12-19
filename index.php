<?php 
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techkillacademy</title>

<?php include 'header.php'; ?>

  <section class="main_banner" style="background-image: url(assets/image/online-coding-class-banner.webp);">
    <div class="main_banner_overlay">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="left_cont_area">
              <h1>Data Analysis Courses Online</h1>
              <h5 class="text-grey">Master skills in data cleaning, exploratory analysis, and data visualization. Find
                courses that teach you to effectively interpret and present data insights.</h5>
              <a class="custom-btn" href="#">Request Call</a>
            </div>
          </div>
          <div class="col-lg-5">
            <!-- <div class="request_form">
                <h3 class="pb-3">Request A Call</h3>
                
                <form class="row" action="" method="POST">
                  <div class="col-12">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-12">
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                  </div>
                  <div class="col-12">
                    <textarea rows="5" cols="4" type="text" name="message" class="form-control" placeholder="Message"></textarea>
                  </div>
                  <div class="btn">
                    <button type="submit" name="submit" class="btn submit_btn">Submit</button>
                  </div>
                </form>
              </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-5 col-md-6 col-sm-12">
          <figure>
            <img src="assets/image/about-us-image.webp" class="img-fluid" alt="about-us-image.webp">
          </figure>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
          <div class="about_content">
            <div class="sec_heading mb-3">
              <h3>About Us</h3>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, doloremque repellat rerum omnis aliquid voluptatum maiores exercitationem officiis soluta quaerat dolore veritatis sit sint excepturi possimus. Ducimus aspernatur repellat exercitationem.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, doloremque repellat rerum omnis aliquid voluptatum maiores exercitationem officiis soluta quaerat dolore veritatis sit sint excepturi possimus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="course">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="sec_heading text-center">
            <h3>Our Courses</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="course-carousel">
            <div class="owl-carousel owl-theme">
              <div class="item">
                <a href="introduction-to-data-analytics.php" class="course_link">
                <div class="single_course">
                  <div class="cour_img">
                    <img src="assets/image/data-analytics-intro.webp" class="img-fluid" alt="">
                  </div>
                  <div class="course_details">
                    <h4>Introduction to Data Analytics</h4>
                    <p><strong>Skills you'll gain: </strong>
                      Computer Programming, Data Analysis, Data Visualization, Exploratory Data Analysis, General
                      Statistics...</p>

                    <div class="time_duration">
                      <span>
                        <span><i class="fa-regular fa-clock"></i></span>
                        3 Months
                      </span>

                    </div>
                  </div>
                </div>
                </a>
              </div>

              <div class="item">
                <a href="data-analysis-with-python.php" class="course_link">
                <div class="single_course">
                  <div class="cour_img">
                    <img src="assets/image/data-analysis-with-python.webp" class="img-fluid" alt="">
                  </div>
                  <div class="course_details">
                    <h4>Data Analysis with Python</h4>
                    <p class="pt-equal"><strong>Skills you'll gain: </strong>
                      Computer Programming, Data Analysis, Data Visualization, Exploratory Data Analysis, General
                      Statistics...</p>

                    <div class="time_duration">
                      <span>
                        <span><i class="fa-regular fa-clock"></i></span>
                        3 Months
                      </span>

                    </div>
                  </div>
                </div>
                </a>
              </div>

              <div class="item">
              <a href="ibm-data-analyst.php" class="course_link">
                <div class="single_course">
                  <div class="cour_img">
                    <img src="assets/image/ibm-data-analytics.webp" class="img-fluid" alt="">
                  </div>
                  <div class="course_details">
                    <h4>IBM Data Analyst</h4>
                    <p class="pt-equal"><strong>Skills you'll gain: </strong>
                      Computer Programming, Data Analysis, Data Visualization, Exploratory Data Analysis, General
                      Statistics...</p>

                    <div class="time_duration">
                      <span>
                        <span><i class="fa-regular fa-clock"></i></span>
                        3 Months
                      </span>

                    </div>
                  </div>
                </div>
                </a>
              </div>

              <div class="item">
                <a href="managing-data-analysis.php" class="course_link">
                <div class="single_course">
                  <div class="cour_img">
                    <img src="assets/image/manage-data-analytic.webp" class="img-fluid" alt="">
                  </div>
                  <div class="course_details">
                    <h4>Managing Data Analysis</h4>
                    <p class="pt-equal"><strong>Skills you'll gain: </strong>
                      Computer Programming, Data Analysis, Data Visualization, Exploratory Data Analysis, General
                      Statistics...</p>

                    <div class="time_duration">
                      <span>
                        <span><i class="fa-regular fa-clock"></i></span>
                        3 Months
                      </span>

                    </div>
                  </div>
                </div>
                </a>
              </div>

              <div class="item">
                <a href="data-analysis-with-interpretation.php" class="course_link">
                <div class="single_course">
                  <div class="cour_img">
                    <img src="assets/image/couse-card-image.webp" class="img-fluid" alt="">
                  </div>
                  <div class="course_details">
                    <h4>Data Analysis and Interpretation</h4>
                    <p><strong>Skills you'll gain: </strong>
                      Computer Programming, Data Analysis, Data Visualization, Exploratory Data Analysis, General
                      Statistics...</p>

                    <div class="time_duration">
                      <span>
                        <span><i class="fa-regular fa-clock"></i></span>
                        3 Months
                      </span>

                    </div>
                  </div>
                </div>
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="benifits">
    <div class="container">
      <div class="row justify-content-between">
        
        <div class="col-lg-6 col-md-6 col-sm-12 align-content-center">
          <div class="about_content text-white">
            <div class="sec_heading mb-3">
              <h3 >Why Choose Us ?</h3>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, doloremque repellat rerum omnis aliquid voluptatum maiores exercitationem officiis soluta quaerat dolore veritatis sit sint excepturi possimus.</p>
            <ul class="points">
              <li>Lorem Ipsum is not simply random text. It has roots in a piece of making it over 2000 years old.</li>
              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              <li>Voluptates natus quasi optio, ipsam quaerat assumenda.</li>
              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates natus.</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 col-sm-12">
          <figure>
            <img src="assets/image/benifits-img.webp" class="img-fluid" alt="benifits-img.webp">
          </figure>
        </div>

      </div>
    </div>
  </section>

  <section class="adv">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
          <figure>
            <img src="assets/image/adv-image.webp" class="img-fluid" alt="adv-image.webp">
            <span class="bg-frame"></span>
          </figure>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-12"></div>
        <div class="col-lg-4 col-md-6 col-sm-12 align-content-center">
          <div class="about_content">
            <h4 class="mb-3 h4-heading">Take the next step toward your personal and professional goals with Tech Skill Academy.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, doloremque repellat rerum.</p>

            <a class="custom-btn" href="login.php">Join Free</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer.php'; ?>