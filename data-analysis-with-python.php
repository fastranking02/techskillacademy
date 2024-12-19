<?php 
session_start();

if (!isset($_SESSION['loginSuccess'])) {
    header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techkillacademy</title>

<?php include 'header.php'; ?>

<section class="course_banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="course_ban_cont">
                    <h1>Data Analysis With Python</h1>
                    <p>This course is part of multiple Programs.</p>

                    <!-- <a class="custom-btn" href="login.php">Enroll for Free</a> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-5">What you will learn?</h3>
            </div>
            <div class="col-lg-12">
                <div class="sec-content">
                    <ul class="course_benefits">
                        <li><span><i class="fa-solid fa-check-double"></i></span>
                        Explain what Data Analytics is and the key steps in the Data Analytics process
                        </li>
                        <li><span><i class="fa-solid fa-check-double"></i></span>
                        Describe the different types of data structures, file formats, and sources of data
                        </li>
                        <li><span><i class="fa-solid fa-check-double"></i></span>
                        Differentiate between different data roles such as Data Engineer, Data Analyst, Data Scientist, Business Analyst, and Business Intelligence Analyst
                        </li>
                        <li><span><i class="fa-solid fa-check-double"></i></span>
                        Describe the data analysis process involving collecting, wrangling, mining, and visualizing data
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="mb-5">Skills you'll gain?</h3>
            </div>
            <div class="col-lg-12">
                <div class="sec-content">
                    <ul class="skills_list">
                        <li><span>
                        Data Science
                        </span></li>
                        <li><span>
                        Spreadsheet
                        </span></li>
                        <li><span>
                        Data Analysis
                        </span></li>
                        <li><span>
                        Microsoft Excel
                        </span></li>
                        <li><span>
                        Data Visualization
                        </span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cert">
    <div class="container">
        <div class="certificate_box">
        <div class="row">

            <div class="col-6">
                <div class="cert_content">
                    <h4 class="title pb-3">Earn a career certificate</h4>
                    <p class="mb-0">Add this credential to your LinkedIn profile, resume, or CV</p>
                    <p>Share it on social media and in your performance review</p>
                </div>
            </div>
            <div class="col-6">
                <div class="cert_img">
                    <div class="bg_light">
                        <div class="bg-light_color"></div>
                    </div>
                    <div class="cert_sample">
                        <img src="assets/image/certificate-sample.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>

            </div>
        </div>
        
    </div>
</section>
    

<?php include 'footer.php'; ?>