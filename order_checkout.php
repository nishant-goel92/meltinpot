<?php
session_start();
if(isset($_POST['payment_submit']))
{
        $_SESSION['street']=$_POST['street'];
		$_SESSION['apt']=$_POST['apt'];
		$_SESSION['zip']=$_POST['zip'];
		$_SESSION['city']=$_POST['city'];
		$_SESSION['state']=$_POST['state'];
        header("location: order_payment.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Checkout</title>
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
    </div>
  </div>

  <div class="checkout_home">
    <div class="row">
      <div class="col checkout_header">
        <h4 class="a">You're almost there!!</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 order-sm-12 cart_col">
        <h5><span class="text-muted">Your cart</span></h5>
		<?php if(!isset($_SESSION['products'])){ ?>
		<br>
		    <div class="empty_cart">
          <h6 class="a">Uh Oh!! Your cart is empty.</h6>
          <a href="homepage.php"><span class="arrow"></span>Return To Homepage</a>
        </div>
		  <?php } else {
		  $total = 0; foreach($_SESSION['products'] AS $product){ $total+=$product['quantity']*$product['price'];
		  ?>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">QTY</span></th>
              <th><span class="text-muted">ITEM</span></th>
              <th class="right-align"><span class="text-muted">PRICE</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="text-muted"><?php echo $product['quantity'] ?></span></td>
              <td><span class="text-muted"><?php echo $product['id'] ?></span></td>
              <td><span class="text-muted"><?php echo $product['price'] ?></span></td>
            </tr>
            <tr>
              <td></td>
              <td class="right-align bold">Total</td>
              <td class="right-align bold"><?php echo '$' .$total ?></td>
            </tr>
		  <?php $_SESSION['total'] = $total; }} ?>
          </tbody>
        </table>
      </div>
      <div class="col-sm-8 order-sm-1 checkout_col">
        <div class="row checkout_row_mobile">
          <form action="" method="post" class="checkout">
            <h5 class="a">Delivery Address</h5>
            <div class="row">
              <div class="col">
                <input type="text" placeholder="Street" name="street" class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" placeholder="Suite/Apt#" name="apt" class="form-control">
              </div>
              <div class="col">
                <input type="text" placeholder="Zip Code" name="zip" class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <input type="text" placeholder="City" name="city" class="form-control" required>
              </div>
              <div class="col">
                <input type="text" placeholder="State" name="state" class="form-control" required>
              </div>
            </div>
			<?php if(isset($_SESSION['total'])) {?>
            <button name = "payment_submit" type="submit" class="btn btn-danger">Go to Payment</button>
			<?php } else { ?>
			<button name = "payment_submit" type="submit" class="btn btn-danger" disabled>Go to Payment</button>
			<?php } ?>
          </form>
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