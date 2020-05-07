<?php
session_start();
if(isset($_POST['pasta_cart']))
{
		$_SESSION['products'][] = array('id'=>'Pasta Primevera', 'quantity'=>$_POST['pasta_qty'], 'price'=>'9.99',);
        //header("location: order_checkout.php");
}
else if(isset($_POST['spaghetti_cart']))
{
        $_SESSION['products'][] = array('id'=>'Spaghetti', 'quantity'=>$_POST['spaghetti_qty'], 'price'=>'9.99',);
        //header("location: order_checkout.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Italian</title>
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
        <?php 
	if(isset($_SESSION['sessionId'])) {?>
	<button type="button" class="btn login" disabled><?php echo $_SESSION['sessionId'] ?></button>
	<button type="button" class="btn btn-danger login" onclick="location.href='logout.php'">Sign Out</button>
<?php } else {?>
	<button type="button" class="btn login" onclick="location.href='sign_in.php'">Sign In</button>
    <button type="button" class="btn btn-danger login" onclick="location.href='sign_up.php'">Sign Up</button>
<?php } ?>
      </div>
      <div class="col-1 cart_icon">
        <a href="order_checkout.php">
          <img src="Images/Logo/basket.jpg" class="img_cart" alt="Cart" data-toggle="modal" data-target="#cart_modal">
        </a>
      </div>
    </div>
  </div>

  <div class="cuisine_home">
    <div class="row">
      <div class="col hamburger_filter">
        <form onchange="location.href='#">
          <nav class="navbar navbar-light">
            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example red" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <h6 class="a">Spicy</h6>
                  <input class="radio_cuisine" type="radio" id="s_mild_m" name="spicy" value="s_mild">
                  <label for="s_mild_m">Mild</label>
                  <input class="radio_cuisine" type="radio" id="s_medium_m" name="spicy" value="s_medium">
                  <label for="s_medium_m">Medium</label>
                  <input class="radio_cuisine" type="radio" id="s_hot_m" name="spicy" value="s_hot">
                  <label for="s_hot_m">Hot</label>
                </li>
                <li class="nav-item">
                  <h6 class="a">Price</h6>
                  <input class="radio_cuisine" type="radio" id="p_low_m" name="price" value="p_low">
                  <label for="p_low_m">Low</label>
                  <input class="radio_cuisine" type="radio" id="p_medium_m" name="price" value="p_medium">
                  <label for="p_medium_m">Medium</label>
                  <input class="radio_cuisine" type="radio" id="p_high_m" name="price" value="p_high">
                  <label for="p_high_m">High</label>
                </li>
                <li class="nav-item">
                  <input type="reset" class="reset">
                </li>
              </ul>
            </div>
          </nav>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h3 class="a" align="center">Italian Dishes</h3>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 cuisine_filter">
        <form class="cuisine_home" onchange="location.href='#">
          <div class="row cuisine_filter_header">
            <h4 class="a">Filters</h4>
          </div>
          <div class="row">
            <h6 class="a">Spicy</h6>
          </div>
          <div class="row cuisine_row">   
            <input class="radio_cuisine" type="radio" id="s_mild" name="spicy" value="s_mild">
            <label for="s_mild">Mild</label>
            <input class="radio_cuisine" type="radio" id="s_medium" name="spicy" value="s_medium">
            <label for="s_medium">Medium</label>
            <input class="radio_cuisine" type="radio" id="s_hot" name="spicy" value="s_hot">
            <label for="s_hot">Hot</label>
          </div>
          <br>
          <div class="row">
            <h6 class="a">Price</h6>
          </div>
          <div class="row cuisine_row">     
            <input class="radio_cuisine" type="radio" id="p_low" name="price" value="p_low">
            <label for="p_low">Low</label>
            <input class="radio_cuisine" type="radio" id="p_medium" name="price" value="p_medium">
            <label for="p_medium">Medium</label>
            <input class="radio_cuisine" type="radio" id="p_high" name="price" value="p_high">
            <label for="p_high">High</label>
          </div>
          <br>
          <div class="row justify-content-center">
            <input type="reset" class="reset">
          </div>
        </form>
      </div>
      <div class="col-sm-8 cuisine_home">
        <div class="row cuisine_row">
          <div class="col">
            <img src="Images/Food/pasta.jpg" class="img_food_modal" alt="Logo" data-toggle="modal" data-target="#pasta_modal">
            <!-- The Modal -->
            <div class="modal fade" id="pasta_modal">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="a">Pasta Primevera</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="a">Ingredients</p>
                    <ul>
                      <li>Penne pasta</li>
                      <li>Fresh veggies including onion, carrot, broccoli, bell pepper, tomatoes and garlic</li>
                      <li>Olive oil</li>
                      <li>Lemon juice</li>
                      <li>Parsley</li>
                      <li>Parmesan cheese</li>
                      <li>Salt</li>
                      <li>Italian seasoning</li>
                    </ul> 
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <h4 class="b" data-toggle="modal" data-target="#pasta_modal">Pasta Primevera</h4>
            </div>
            <div class="row">
              <p class="a">Fresh penne pasta and seasonal vegetables tossed with garlic, olive oil, diced tomatoes and parmesan cheese</p>
            </div>
            <form action="" method="post" class="pasta_count" onchange="location.href='#">
              <div class="row cuisine_row">
                <div class="col-3">
                  <input type="text" name = "pasta_price" id="item_price" value="$9.99" disabled />
                </div>
                <div class="col-3">
                  <img src="Images/Food/spicy_medium.jpg" class="img_spicy">
                </div>
                <div class="col-6">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <div class="row cuisine_row">
                <div class="col-4">
                  <select name="pasta_qty" class="custom-select select_qty" id="quantity">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
                <div class="col-8">
                  <button name="pasta_cart" type="submit" class="button_cart">Add to Cart</button>
                </div>
              </div>
              <div class="row">
                <div class="col-4"></div>
				<?php 
						if(isset($_POST['pasta_qty'])) {?>
                <div class="col-8">
                  <p class="d">Yay!! <?php echo $_POST['pasta_qty']?> item(s) added to cart</p>
                </div>
				<?php } ?>
              </div>
            </form>
          </div>
        </div>
        <div class="row cuisine_row">
          <div class="col">
            <img src="Images/Food/spaghetti.jpg" class="img_food_modal" alt="Logo" data-toggle="modal" data-target="#spaghetti_modal">
            <!-- The Modal -->
            <div class="modal fade" id="spaghetti_modal">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="a">Spaghetti</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <p class="a">Ingredients</p>
                    <ul>
                      <li>Spaghetti noodles</li>
                      <li>Ground beef</li>
                      <li>Olive oil</li>
                      <li>Tomato paste</li>
                      <li>Oregano</li>
                      <li>Onion</li>
                      <li>Garlic</li>
                      <li>Basil leaves</li>
                      <li>Salt and black pepper</li>
                      <li>Parmesan cheese</li>
                      <li>Lemon</li>
                    </ul> 
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <h4 class="b" data-toggle="modal" data-target="#spaghetti_modal">Spaghetti</h4>
            </div>
            <div class="row">
              <p class="a">Spaghetti and tomato sauce with a toasted baguette</p>
            </div>
            <form action="" method="post" class="spaghetti_count" onchange="location.href='#">
              <div class="row cuisine_row">
                <div class="col-3">
                  <input type="text" name = "spaghetti_price" id="item_price" value="$9.99" disabled />
                </div>
                <div class="col-3">
                  <img src="Images/Food/spicy_mild.jpg" class="img_spicy">
                </div>
                <div class="col-6">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
              <div class="row cuisine_row">
                <div class="col-4">
                  <select name="spaghetti_qty" class="custom-select select_qty" id="quantity">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
                <div class="col-8">
                  <button name="spaghetti_cart" type="submit" class="button_cart">Add to Cart</button>
                </div>
              </div>
              <div class="row">
                <div class="col-4"></div>
                <?php 
						if(isset($_POST['spaghetti_qty'])) {?>
                <div class="col-8">
                  <p class="d">Yay!! <?php echo $_POST['spaghetti_qty']?> item(s) added to cart</p>
                </div>
				<?php } ?>
              </div>
            </form>
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

<!-- The Modal -->
<div class="modal fade" id="cart_modal">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="a">Cart Message</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <p class="b">Your cart seems to be empty!!</p>
        <p class="b">Please add some dishes to continue.</p> 
      </div>
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>