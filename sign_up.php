<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUp</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="page">
  <div class="card sticky-top">
    <div class="row">      
      <div class="col-6">
        <a href="homepage.php">
          <img id = "logo1" src="Images/Logo/logo.jpg" alt="Logo">
        </a>
      </div>
      <div class="col-6 heading">
        <h3 class="a">Sign Up</h3>
      </div>
    </div>
  </div>

  <div id="container-fluid" class="signup_home">
    <div class="row text-center">
      <div class="col-sm-6"></div>
      <div class="col-sm-6">
        <form action="signup.php" method="post" class="signup">
          <h1 class="a">Hey Stranger!!</h1>
          <br>
          <div class="row">
            <div class="col">
              <input type="text" placeholder="Enter First Name" name="fname" class="form-control" required>
            </div>
            <div class="col">
              <input type="text" placeholder="Enter Last Name" name="lname" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="email" placeholder="Enter Email" name="email" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="password" placeholder="Enter Password" name="psw" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="password" placeholder="Confirm Password" name="cnf_psw" class="form-control" required>
            </div>
          </div>
          <button type="submit" class="btn btn-danger">Sign Up</button>
		  <?php if(isset($_SESSION['isRegister'])) { ?>
		  <?php if($_SESSION['isRegister']=="true") { ?>
          <p class="b">Successfully registered! <a href="sign_in.php">Sign In</a></p>
		  <?php }else if($_SESSION['isRegister']=="false"){ ?>
		  <p class="b">Email already registered! <a href="sign_in.php">Sign In</a></p>
		  <?php }} else { ?>
		  <p class="b">Already have an account? <a href="sign_in.php">Sign In</a></p>
		  <?php } ?>
        </form>
      </div>
    </div> 
  </div>

  <div class="jumbotron">
    <div id="container-fluid" class="about">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
          <h5>Get to Know Us</h5>
          <br>
          <p><a href="about_us.php" target="_blank">About Us</a></p>
          <p><a href="stories.php" target="_blank">MeltinPot Stories</a></p>
          <p><a href="blog.php" target="_blank">Blog</a></p>
          <p><a href="news.php" target="_blank">News</a></p>
        </div>
        <div class="col-sm-3">
          <h5>Let Us Help You</h5>
          <br>
          <p><a href="account_details.php" target="_blank">Account Details</a></p>
          <p><a href="order_history.php" target="_blank">Order History</a></p>
          <p><a href="faq.php" target="_blank">FAQs</a></p>
          <p><a href="contact_us.php" target="_blank">Contact Us</a></p>
        </div>
        <div class="col-sm-3"></div>
      </div>
      <br>
      <div class="row">
        <div class="col text-left">
          <a href="homepage.php" style="text-decoration: none">
            <img src="Images/Logo/logo1.jpg" class="rounded-circle" alt="Logo" width="30" height="30">
          </a>
          &nbsp&nbsp&nbsp
          <a href="terms_of_use.php" target="_blank">Terms of Service</a>
          &nbsp&nbsp&nbsp
          <a href="privacy.php" target="_blank">Privacy</a>
        </div>
        <div class="col text-right">
          <a href="admin.php" target="_blank">Admin Login</a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
    &copyDeveloped by Team 07
  </div>
</div>

</body>
</html>
