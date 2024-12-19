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

if (isset($_POST['login'])) {

    $userName = $_POST['username'];
    $passWord = $_POST['password'];

    // Use prepared statements to avoid SQL injection
    $query = "SELECT * FROM `users` WHERE username = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $userName, $passWord);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['loginSuccess'] = "Welcome";

            // Fetch user details
            $catchUserDetail = "SELECT `username`, `studentname`, `email`, `phone`, `gender`, `address` FROM `user_details` WHERE username = ?";
            $stmt2 = mysqli_prepare($conn, $catchUserDetail);

            if ($stmt2) {
                mysqli_stmt_bind_param($stmt2, "s", $userName);
                mysqli_stmt_execute($stmt2);
                $catchResult = mysqli_stmt_get_result($stmt2);

                if (mysqli_num_rows($catchResult) > 0) {
                    $row = mysqli_fetch_assoc($catchResult);

                    // Store the studentname in the session
                    $_SESSION['studentName'] = $row['studentname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['address'] = $row['address'];
                }

                mysqli_stmt_close($stmt2);
            }

            header("location: my-profile.php");
            exit();
        } else {
            $_SESSION['loginError'] = "Please enter correct Username and Password.";
            header("location: login.php");
            exit();
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "SQL query preparation failed!";
    }
}

mysqli_close($conn);

?>
