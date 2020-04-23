<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="utf-8">
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
      <div class="col-5">
        <a href="homepage.php">
          <img id = "logo1" src="Images/Logo/logo.jpg" alt="Logo">
        </a>
      </div>
    </div>
  </div>

  <div class="about_us_home">
    <div class="row">
      <div class="col">
        <h4 class="a">Awww!! You couldn't resist meeting us</h4>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-6 about_us_col">
        <div class="row">
          <div class="col">
            <h4 class="a">Our Vision</h4>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">To connect the whole world together through the medium of food</p>  
          </div>
        </div>
      </div>
      <div class="col-sm-6 about_us_col">
        <div class="row">
          <div class="col">
            <h4 class="a">Our Mission</h4>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">MeltinPot aims to serve authentic home-cooked meals from different countries, cultures and traditions across the globe</p>  
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 about_us_col">
        <div class="row">
          <div class="col">
            <h4 class="a">Our Values</h4>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">Customer Satisfaction, Quality, Integrity and Personal Accountability is what keeps us focused and motivated</p>  
          </div>
        </div>
      </div>
      <div class="col-sm-6 about_us_col">
        <div class="row">
          <div class="col">
            <h4 class="a">Our Essence</h4>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">At our core, MeltinPot runs on imagination, creativity, teamwork and ofcourse your love</p>  
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
          <h4 class="a">Meet our team</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3 team_col">
        <div class="row">
          <div class="col">
            <img id="team_image" src="Images/Logo/team1.jpg" alt="Ashwin">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Ashwin Bhide</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Backend Developer</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">Hi I am Ahswin. My favourite food is Pasta. If the website is not working properly, Nishant worked on it.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 team_col">
        <div class="row">
          <div class="col">
            <img id="team_image" src="Images/Logo/team1.jpg" alt="Ashwin">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">David Zuniga</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Business Analyst</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">Hi I am David. My favourite food is Chowmein. If you want a new functionality, I am the one who gives them more work.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 team_col">
        <div class="row">
          <div class="col">
            <img id="team_image" src="Images/Logo/team2.png" alt="Ashwin">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Nikita Gambani</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Product Manager</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">Hi I am Nikita. My favourite food is Chicken Biryani. I make sure the boys behave properly while working.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 team_col">
        <div class="row">
          <div class="col">
            <img id="team_image" src="Images/Logo/team1.jpg" alt="Ashwin">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Nishant Goel</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <h5 class="b">Frontend Developer</h5>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <p class="e">Hi I am Nishant. My favourite food is Tiramisu. If the website doesn't look good, I just add a little more #ff0000.</p>
          </div>
        </div>
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