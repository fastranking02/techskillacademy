<?php 
session_start();

$_SESSION['usernameError'] = "";
$_SESSION['RegisterSuccess'] = "";
$_SESSION['RegisterError'] = "";
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Techkillacademy</title>

<?php include 'header.php'; ?>

  <section class="login_pannel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="login_form">
                    <div class="form_heading">
                        <h4 class="text-center pb-4">Login</h4>
                    </div>
                    <form class="row" action="login-func.php" method="POST">
                        <div class="col-12">
                            <input type="text" name="username" class="form-control" placeholder="Username / Email ID">
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>

                        <div class="col-12">
                            <button type="submit" name="login" class="btn submit_btn login_btn text-white text-center w-100">Login</button>
                        </div>

                        <div class="col-12 error_container">
                            <?php 

                                if (isset($_SESSION['loginError']) && $_SESSION['loginError'] != "") {
                                    echo "<p class='text-danger text-center mt-3 mb-0'>";
                                    echo htmlspecialchars($_SESSION['loginError']);
                                    echo "</p>";
                                }
                            ?>
                        </div>

                        <div class="other_materials">
                            <p class="text-center my-3"><a class="new-user-link" href="register-new-user.php">Register New User</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>