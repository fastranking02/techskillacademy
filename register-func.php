<?php

session_start();

// Database connection
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'sandy_project';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die('Connection Failed: ' . mysqli_connect_error());
}

if (isset($_POST['register'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE username = '$userName'";
    $userMatch = mysqli_query($conn, $query);   

    if (mysqli_num_rows($userMatch) == 1) {
        $_SESSION['usernameError'] = "This username is already used. Please use another username.";
        $_SESSION['RegisterSuccess'] = "";
        $_SESSION['RegisterError'] = "";
        header("location: register-new-user.php");
        exit();
    } else {
        $userDetail = "INSERT INTO `user_details`(`username`, `studentname`, `email`, `phone`, `gender`, `address`) VALUES ('$userName','$fullname','$email','$phone','$gender','$address')";
        $userInfo = "INSERT INTO `users`(`username`, `password`) VALUES ('$userName','$passWord')";
        $userDetailResult = mysqli_query($conn, $userDetail);
        $userInfoResult = mysqli_query($conn, $userInfo);

        if ($userDetailResult && $userInfoResult){
            $_SESSION['usernameError'] = "";
            $_SESSION['RegisterSuccess'] = "Your account created successfully.";
            header("location: register-new-user.php");
            exit();
        } else {
            $_SESSION['RegisterError'] = "Something went wrong! Please try again latter.";
            $_SESSION['usernameError'] = "";
            $_SESSION['RegisterSuccess'] = "";
            header("location: register-new-user.php");
            exit();
        }
        exit();
    }
}

mysqli_close($conn);

?>