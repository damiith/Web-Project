<?php

include_once "dbconnect.php";

  if(isset($_POST['Submit'])){
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO contact_us (name,email,message) VALUES('$name','$email','$msg')";

    if(mysqli_query($conn,$sql)){

      header("refresh:1;url=contact.php");
      $alert = "Successfully Sended";
      //echo "<script>alert('Successfully Sended');</script";

      echo "<script>
              alert('$alert');
           </script>";

      //include 'redirect/contactusdb.php';
    }else{
      echo "<script>alert('Try Again')</script>";
    }
  }

  mysqli_close($conn);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>

    <title>Contact</title>
</head>
<body>


    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 border-bottom bg-dark">
        <h2 class="logo" style="color:white;text-transform: uppercase;padding-left: 20px;"><a href="../index.html"><img src="zlogo.png" alt="Zero2Hero" width="350" height="100"></a></h2>
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="../index.html" class="nav-link text-white ">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white"></a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle px-2 text-white" href="#" id="dropdown04" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown04">
              <li><a class="dropdown-item" href="../mathsPages/Mathematics.html">Math</a></li>
                    <li><a class="dropdown-item" href="./science page/schome.html">Science</a></li>
                    <li><a class="dropdown-item" href="English page/English.html">English</a></li>
                    <li><a class="dropdown-item" href="../tech_page/tech_page(MAIN).html">technology</a></li>
              </ul>
            </li>
            <li><a href="#" class="nav-link px-2 text-dark"></a></li>
            <li><a href="./pastpapers/pastpapers.html" class="nav-link px-2 text-white">Pastpapers</a></li>
            <li><a href="#" class="nav-link px-2 text-white"></a></li>
            <li><a href="AboutUs.html" class="nav-link px-2 text-white">About Us</a></li>
            <li><a href="#" class="nav-link px-2 text-white"></a></li>
            <li><a href="contact.php" class="nav-link active">Contact Us</a></li>
          </ul>

          <div class="col-md-3 text-center">
           <a href="./login.php"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
           <a href="./signup.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
          </div>
        </header>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>stay focus on your goals while we focus on expanding your learning experiance.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Mahenwaththa<br>
                            Pitipana,Homagama,<br>
                              Sri Lanka</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>+94 11 5445000</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>zero2hero.edu@outlook.com</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" name="message"></textarea>
                        <span>Type your Message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="Submit" value="Send">
                </form>
            </div>
        </div>
    </section>


    <!--footer-->


<footer class="text-center text-lg-start bg-dark text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/Zero2Hero.lk/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/Zero2Hero_lk" target="_blank" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>

      <a href="https://www.instagram.com/zero2hero.lk/" target="_blank" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>

    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Zero2Hero
          </h6>
          <p>
            Team ZERO2HERO always trying to provide the study meterails and the motivation you need to continue pushing yourself to complete your online education goals.We think there is always something new to learn.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            SUBJECTS
        </h6>
        <p>
          <a href="../mathsPages/Mathematics.html" class="text-reset">MATHEMATICS</a>
        </p>
        <p>
          <a href="../tech_page/tech_page(MAIN).html" class="text-reset">TECHNOLOGY</a>
        </p>
        <p>
          <a href="./English page/English.html" class="text-reset">ENGLISH</a>
        </p>
        <p>
          <a href="./science page/schome.html" class="text-reset">SCIENCE</a>
        </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
          <a href="./AboutUs.html" class="text-reset"> about us </a>
        </p>
        <p>
          <a href="./contact.php" class="text-reset">contact us</a>
        </p>
        <p>
          <a href="./login.php" class="text-reset">login</a>
        </p>
        <p>
          <a href="./signup.php" class="text-reset">sign up</a>
        </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i>Mahenwaththa, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pitipana, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Homagama, <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Sri Lanka</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            zero2hero.edu@outlook.com
          </p>
          <p><i class="fas fa-phone me-3"></i>+94 11 5445000</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
   &copy; 2021 Copyright:
    <a class="text-reset fw-bold" href="##">Zero2Hero.com</a>
  </div>
  <!-- Copyright -->
</footer>

      <!--Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <!--MD-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>
</html>
