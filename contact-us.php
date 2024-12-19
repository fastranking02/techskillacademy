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

<section class="inner-page-banner py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center text-white">Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
<div class="container my-3">
        <div class="row justify-content-between">
          <div class="col-lg-6">
            <div class="left_cont_area align-content-start">
            <h3 class="pb-3"><strong>Get In Touch</strong></h3>

            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error molestiae corrupti enim quidem exercitationem beatae quaerat. Iste facilis, labore aspernatur obcaecati neque repellendus officia? Consequatur aut odio amet aliquam facere!</p>

            <div class="footer_block get-in-toucch block4">

            <ul class="pt-3 ps-1">
              <li><a href="#" class="text-black"><span><i class="fa-solid fa-location-dot"></i></span> Sec 28, Faridabad</a></li>
              <li><a href="#" class="text-black"><span><i class="fa-solid fa-envelope"></i></span> info@techskillacademy.com</a></li>
              <li><a href="#" class="text-black"><span><i class="fa-solid fa-phone"></i></span> 0123456789</a></li>
            </ul>
          </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="request_form">
                <h3 class="pb-3"><strong>Send Message</strong></h3>
                
                <form class="row" action="" method="POST">
                  <div class="col-12">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="col-12">
                    <input type="email" name="email" class="form-control" placeholder="Email ID">
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
              </div>
          </div>
        </div>
      </div>
</section>

<section>
    <div class="container-fluid p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7017.786347545829!2d77.31322592958472!3d28.42248008900777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1730578779537!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php include 'footer.php'; ?>