<?php
session_start();
if(isset($_POST['confirm_order'])){
	header("location: confirmorder.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Payment</title>
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
        <h4 class="a">Last Step...We Promise!!</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 order-sm-12 cart_col">
        <h5><span class="text-muted">Your cart</span></h5>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">QTY</span></th>
              <th><span class="text-muted">ITEM</span></th>
              <th class="right-align"><span class="text-muted">PRICE</span></th>
            </tr>
          </thead>
          <tbody>
            <?php $total = 0; foreach($_SESSION['products'] AS $product){ $total+=$product['quantity']*$product['price']; ?>
            <tr>
              <td><span class="text-muted"><?php echo $product['quantity'] ?></span></td>
              <td><span class="text-muted"><?php echo $product['id'] ?></span></td>
              <td><span class="text-muted"><?php echo $product['price'] ?></span></td>
            </tr>
            <tr>
			<?php } ?>
              <td></td>
              <td class="right-align bold">Total</td>
              <td class="right-align bold"><?php echo '$' .$total ?></td>
            </tr>
			<?php ?>
          </tbody>
        </table>
      </div>
      <div class="col-sm-8 order-sm-1 checkout_col">
        <div class="row checkout_row_mobile">
          <form action="" method="post" class="payment">
            <h5 class="a">Payment Information</h5>
            <fieldset class="fieldset">
              <label for="card_number">Card Number</label>
              <div class="row">
                <div class="col">
                  <input type="number" name="card_number" class="form-control" maxlength="4" required>
                </div>
                <div class="col">
                  <input type="number" name="card_number" class="form-control" maxlength="4" required>
                </div>
                <div class="col">
                  <input type="number" name="card_number" class="form-control" maxlength="4" required>
                </div>
                <div class="col">
                  <input type="number" name="card_number" class="form-control" maxlength="4" required>
                </div>
              </div>
            </fieldset>
            <fieldset class="fieldset">
              <label for="card_name">Card Holder's Name</label>
              <div class="row">
                <div class="col">
                  <input type="text" name="card_name" class="form-control" required>
                </div>
              </div>
            </fieldset>
            <fieldset class="fieldset">
              <label for="card_exp">Expiration Date</label>
              <div class="row">
                <div class="col">
                  <select class="custom-select" id="card_month" required>
                    <option value="" selected disabled hidden>Month</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <div class="col">
                  <select class="custom-select" id="card_year" required>
                    <option value="" selected disabled hidden>Year</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                  </select>
                </div>
              </div>
            </fieldset>
            <fieldset class="fieldset">
              <label for="card_code">Security Code</label>
              <div class="row">
                <div class="col">
                  <input type="number" name="card_cvv" class="form-control" maxlength="4" required>
                </div>
              </div>
            </fieldset>
            <button name = "confirm_order" type="submit" class="btn btn-danger">Confirm and Pay</button>
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