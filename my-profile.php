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

    <section class="user_dashboard">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="user_details my-5">
                        <div class="user_profile">
                            <div class="user_icon">
                                <figure>
                                    <img src="assets/image/user-icon.png" class="img-fluid" alt="">
                                </figure>
                            </div>
                        </div>

                        <div class="about_user">
                            <ul class="py-4 px-0">
                                <li><span>Name: </span> <span><?php echo $_SESSION['studentName']; ?></span></li>
                                <li><span>Email ID: </span> <span><?php echo $_SESSION['email']; ?></span></li>
                                <li><span>Phone: +91 <?php echo $_SESSION['phone']; ?></span></li>
                                <li><span>Phone: <?php echo $_SESSION['gender']; ?></span></li>
                                <li><span>Phone: <?php echo $_SESSION['address']; ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="course_lists my-5">
                        <h3 class="text-center">Courses</h3>

                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <div class="item">
                                <a href="introduction-to-data-analytics.php" target="_blank">
                                    <div class="single_course">
                                        <div class="cour_img">
                                            <img src="assets/image/data-analytics-intro.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="course_details">
                                            <h4>Introduction to Data Analytics</h4>
                                            <p><strong>Skills you'll gain: </strong>
                                                Computer Programming, Data Analysis, Data Visualization, Exploratory
                                                Data Analysis, General
                                                Statistics...</p>

                                            <div class="time_duration">
                                                <span>
                                                    <span><i class="fa-regular fa-clock"></i></span>
                                                    3 Months
                                                </span>

                                            </div>
                                        </div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <div class="item">
                                    <div class="single_course">
                                        <div class="cour_img">
                                            <img src="assets/image/data-analysis-with-python.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="course_details">
                                            <h4>Data Analysis with Python</h4>
                                            <p><strong>Skills you'll gain: </strong>
                                                Computer Programming, Data Analysis, Data Visualization, Exploratory
                                                Data Analysis, General
                                                Statistics...</p>

                                            <div class="time_duration">
                                                <span>
                                                    <span><i class="fa-regular fa-clock"></i></span>
                                                    3 Months
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                                <div class="item">
                                    <div class="single_course">
                                        <div class="cour_img">
                                            <img src="assets/image/ibm-data-analytics.webp" class="img-fluid" alt="">
                                        </div>
                                        <div class="course_details">
                                            <h4>IBM Data Analyst</h4>
                                            <p class="pt-equal"><strong>Skills you'll gain: </strong>
                                                Computer Programming, Data Analysis, Data Visualization, Exploratory
                                                Data Analysis, General
                                                Statistics...</p>

                                            <div class="time_duration">
                                                <span>
                                                    <span><i class="fa-regular fa-clock"></i></span>
                                                    3 Months
                                                </span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="item">
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
                            </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                            <div class="item"></div>
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
                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>