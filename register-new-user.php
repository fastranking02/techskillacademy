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

<section class="new_user_pannel">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="new_user_form">
          <h3 class="form-title text-center mb-5">Register A New User</h3>

          <form action="register-func.php" class="row" method="POST">
            <div class="col-12">
              <input type="text" name="fullname" class="form-control" placeholder="Name" required>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <input type="email" name="email" class="form-control" placeholder="Email ID" required>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <input type="phone" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="col-12">
            <select class="form-select" name="gender" aria-label="Default select example" required>
              <option selected>Select your gender</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
              <option value="3">Other</option>
            </select>
            </div>
            <div class="col-12">
              <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>
            <div class="col-12">
              <div class="pt-4 mt-3 border-top"></div>
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              <?php 
                  if (isset($_SESSION['usernameError']) && $_SESSION['usernameError'] != "") {
                      echo "<p class='text-danger mt-1 mb-3'>";
                      echo htmlspecialchars($_SESSION['usernameError']);
                      echo "</p>";
                  }
              ?>
            </div>
            <div class="col-12">
              <input type="text" name="password" class="form-control" placeholder="Password" required>
            </div>


            <div class="col-12">
                <button type="submit" name="register" class="btn submit_btn register_btn text-white text-center w-100">Register</button>
            </div>

            <div class="col-12 error_container">
                <?php 

                    if (isset($_SESSION['RegisterSuccess']) && $_SESSION['RegisterSuccess'] != "") {
                        echo "<p class='text-success text-center mt-3 mb-0'>";
                        echo htmlspecialchars($_SESSION['RegisterSuccess']);
                        echo "</p>";
                    }

                    if (isset($_SESSION['RegisterError']) && $_SESSION['RegisterError'] != "") {
                        echo "<p class='text-danger text-center mt-3 mb-0'>";
                        echo htmlspecialchars($_SESSION['RegisterError']);
                        echo "</p>";
                    }
                ?>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>