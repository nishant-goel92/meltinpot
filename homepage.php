<!DOCTYPE html>
<html lang="en">
<head>
  <title>MeltinPot</title>
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
      <div class="col-6 text-right">
        <button type="button" class="btn login" onclick="location.href='sign_in.php'">Sign In</button>
        <button type="button" class="btn btn-danger login" onclick="location.href='sign_up.php'">Sign Up</button>
      </div>
      <div class="col-1 cart_icon">
        <a href="order_checkout.html">
          <img src="Images/Logo/basket.jpg" class="rounded-circle" alt="Cart" width="35" height="35">
        </a>
      </div>
    </div>
  </div>

  <div id="container-fluid" class="homepage_home">
    <div class="row text-center">
      <div class="col-sm-4"></div>
      <div class="col text-center">
        <img id="logo2" src="Images/Logo/logo1.jpg" class="rounded-circle" alt="Logo">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col text-center">
        <h1 class="a">Good Food, Great Memories</h1>
        <h5 class="a">Come and enjoy authentic homecooked meals from around the globe</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-8 text-center">
        <form class="homepage_cuisine" action="search_cuisine.php" method="post">
          <input type="text" name="search" placeholder="Enter a cuisine..">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>

  <div id="container-fluid" class="homepage_top_dishes">
    <div class="row">
      <h2 class="a">This week's top dishes</h2>
    </div>
    <br>
    <div class="row bottom-buffer">
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/chicken_biryani.jpg" class="img_food" alt="Logo">
          <div class="img_text">Delicately spiced basmati rice cooked with tender marinated chicken pieces, topped with nuts and raisins</div>
        </div>
        <h3 class="a">Chicken Biryani</h3>
      </div>
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/pasta.jpg" class="img_food" alt="Logo">
          <div class="img_text">Fresh penne pasta and seasonal vegetables tossed with garlic, olive oil, diced tomatoes and parmesan cheese</div>
        </div>
        <h3 class="a">Pasta Primevera</h3>
      </div>
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/chowmein.jpg" class="img_food" alt="Logo">
          <div class="img_text">Stir-fried vegetables with boiled noodles</div>
        </div>
        <h3 class="a">Chow mein</h3>
      </div>
    </div>
    <div class="row bottom-buffer">
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/spaghetti.jpg" class="img_food" alt="Logo">
          <div class="img_text">Spaghetti and tomato sauce with a toasted baguette</div>
        </div>
        <h3 class="a">Spaghetti</h3>
      </div>
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/carrot_pudding.jpg" class="img_food" alt="Logo">
          <div class="img_text">Rich dessert made with fresh carrots, milk and sugar encapsulated within the generous amount of ghee</div>
        </div>
        <h3 class="a">Carrot Pudding</h3>
      </div>
      <div class="col text-center">
        <div class="img-with-text">
          <img src="Images/Food/tiramisu.jpg" class="img_food" alt="Logo">
          <div class="img_text">Classic Italian dessert made with mascarpone, lady fingers and espresso coffee</div>
        </div>
        <h3 class="a">Tiramisu</h3>
      </div>
    </div>
  </div>

  <div class="jumbotron">
    <div id="container-fluid">
      <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
          <h5>Get to Know Us</h5>
          <br>
          <p><a href="about_us.html.html" target="_blank">About Us</a></p>
          <p><a href="stories.html" target="_blank">MeltinPot Stories</a></p>
          <p><a href="blog.html" target="_blank">Blog</a></p>
          <p><a href="news.html" target="_blank">News</a></p>
        </div>
        <div class="col-sm-3">
          <h5>Let Us Help You</h5>
          <br>
          <p><a href="account_details.html" target="_blank">Account Details</a></p>
          <p><a href="order_history.html" target="_blank">Order History</a></p>
          <p><a href="faq.html" target="_blank">FAQs</a></p>
          <p><a href="contact_us.html" target="_blank">Contact Us</a></p>
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
          <a href="terms_of_use.html" target="_blank">Terms of Service</a>
          &nbsp&nbsp&nbsp
          <a href="privacy.html" target="_blank">Privacy</a>
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