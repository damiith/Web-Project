<?php
include_once "dbconnect.php";

if(isset($_POST['login'])){
  $uname = $_POST['username'];
  $pwd = md5($_POST['password']);

  if($uname == "" && $pwd == ""){
    echo "<script>alert('Username or Password is Empty!!')</script>";
  }

  $sql = "SELECT * FROM signup where username = '$uname' AND password = '$pwd'";

  $result = mysqli_query($conn,$sql);

  while($row =mysqli_fetch_array($result)){
    $dbuname = $row['username'];
    $dbpwd = $row['password'];

    $alertu = 'Username is incorrect!!';
    $alertp = 'Password is incorrect!!';
    $alertl = 'Successfully Logged in';

    if($uname != $dbuname){
      header("refresh:1;url=login.php");
      echo "<script>
              alert('$alertu');
           </script>";
    }

    if($pwd != $dbpwd){
      header("refresh:1;url=login.php");
      echo "<script>
              alert('$alertp');
           </script>";    }

    if($uname == $dbuname && $pwd == $dbpwd){
      header("refresh:1;url=../index.html");
      echo "<script>
              alert('$alertl');
           </script>";
     }
    else{
      header("refresh:1;url=login.php");
      echo "<script>
              alert('$alertu, $alertp');
           </script>";
     }
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet"/>
    <link rel="stylesheet" href="../css/styles.css">
    <title>Login in</title>
    <style>
         *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Poppins' , sans-serif;
}

        body{
              font-size: 1.5rem;
        }

        .image-cover{

            background-image: url("https://backgroundcheckall.com/wp-content/uploads/2017/12/admin-login-background-images-8.jpg");
            height:100vh;
            width:100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 10%;
            padding-bottom: 10%;
        }

        .border{
            border: solid cyan 1px;
        }

        .error{
    	      color: red;
            font-style: italic;
            font-size: small;
            font-weight: lighter;
        }

    </style>
</head>
<body>
    <header class="pb-5">
        <a href="../index.html" class="brand"><img src="../img/zlogo.png" width="250" ></a>
        <div class="menu-btn"></div>

        <div class="navigation">
        <div class="navigation-items">
                <a href="../index.html">Home</a>
                <a href="./courses/courses.html">Courses</a>



                <a href="./pastpapers/pastpapers.html">Pastpapers</a>

                <a href="./AboutUs.html">About Us</a>
                <a href="./contact.php">Contact Us</a>
                <a href="./login.html">Login</a>
                <a href="./signup.php">Sign-up</a>
        </div>
        </div>
    </header>

    <section class ="image-cover">
        <div class="border row m-5 p-5 ms-5 me-5">

            <div class="col-md-6 p-3 my-auto text-info ">
                <div class="text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10em" height="10em" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                        <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <div class="display-1 text-white">Login</div>
                    </svg>

                </div>
            </div>

            <div class="col-md-6 bg-white p-5 rounded">
                <form id="signup" action="" method="POST" >
                    <div class="p-2 me-5 mb-5">
                        <label class="text-dark" for="username">Username</label>
                        <input type="text"  name="username" id="name" class="form-control">
                    </div>

                    <div class="p-2 me-5 mb-5">
                        <label class="text-dark" for="password">Password</label>
                        <input type="password"  name="password"  class="form-control">
                    </div>

                    <div class="p-2 mb-3 text-center">
                    <button type="submit"  name = "login" class="btn btn-lg btn-primary ">Login ???</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


         <!--Footer-->
<footer class="text-center text-lg-start bg-dark text-muted">

    <!-- Section: Links  -->
    <section class="footer">
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
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
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
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            zero2hero.edu@outlook.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
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


    <script>

        //Javascript of responsive navigation menu

        const menuBtn = document.querySelector(".menu-btn");
        const navigation = document.querySelector(".navigation");


        menuBtn.addEventListener("click", () =>{
            menuBtn.classList.toggle("active");
            navigation.classList.toggle("active");
        } );


    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#signup").validate({
          rules: {
            username:{
              required: true,
              minlength:4
            },
            password: {
                required: true,
                minlength: 8
            }
        },
        messages:{
            username: {
                //error message for the required field
                required: 'Please enter username!',
                minlength: 'Please Enter at least 4 characters'
            },
            password: {
                required: 'Please enter password!',
                minlength: 'Please Enter at least 8 characters with a capital, with special characters and numbers'
            }
          }
        });
    });
  </script>
</body>
</html>
