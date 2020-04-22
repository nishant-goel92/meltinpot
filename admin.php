<?php
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'meltinpot');

$usersQuery = "SELECT firstName, lastName, email, password from users";
$ordersQuery = "SELECT orderId, userId, createdDate, total from orders";
$addressQuery = "SELECT orderId, userId, state, city, zip, addressLine from address";
$orderLineQuery = "SELECT orderId, userId, productId, quantity from orderLine";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database Details</title>
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
      <div class="col">
        <a href="homepage.php">
          <img id = "logo1" src="Images/Logo/logo.jpg" alt="Logo">
        </a>
      </div>
    </div>
  </div>

  <div class="admin_home">
    <div class="row">
      <div class="col checkout_header">
        <h4 class="a">Database Details</h4>
      </div>
    </div>
    <div class="row">
      <div class="col admin_col">
        <h5><span class="text-muted">Users</span></h5>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">First Name</span></th>
              <th><span class="text-muted">Last Name</span></th>
              <th><span class="text-muted">User ID</span></th>
              <th><span class="text-muted">Password</span></th>
            </tr>
          </thead>
          <tbody>
		  <?php 
			$result = mysqli_query($con,$usersQuery);
			while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><span class="text-muted"><?php echo $row['firstName']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['lastName']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['email']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['password']." ";?></span></td>
            </tr>
            <tr>
			<?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col admin_col">
        <h5><span class="text-muted">Address</span></h5>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">Order ID</span></th>
              <th><span class="text-muted">User ID</span></th>
              <th><span class="text-muted">Address</span></th>
              <th><span class="text-muted">State</span></th>
              <th><span class="text-muted">City</span></th>
              <th><span class="text-muted">Zip</span></th>
            </tr>
          </thead>
          <tbody>
		   <?php 
			$result = mysqli_query($con,$addressQuery);
			while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><span class="text-muted"><?php echo $row['orderId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['userId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['state']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['city']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['zip']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['addressLine']." ";?></span></td>
            </tr>
            <tr>
			<?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col admin_col">
        <h5><span class="text-muted">Orders</span></h5>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">Order ID</span></th>
              <th><span class="text-muted">User ID</span></th>
              <th><span class="text-muted">Order Date</span></th>
              <th><span class="text-muted">Total</span></th>
            </tr>
          </thead>
          <tbody>
		  <?php 
			$result = mysqli_query($con,$ordersQuery);
			while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><span class="text-muted"><?php echo $row['orderId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['userId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['createdDate']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['total']." ";?></span></td>
            </tr>
            <tr>
			<?php } ?>
          </tbody>
        </table>
      </div>
      <div class="col admin_col">
        <h5><span class="text-muted">Order Line</span></h5>
        <table>
          <thead>
            <tr>
              <th><span class="text-muted">Order ID</span></th>
              <th><span class="text-muted">User ID</span></th>
              <th><span class="text-muted">Product ID</span></th>
              <th><span class="text-muted">Quantity</span></th>
            </tr>
          </thead>
          <tbody>
		  <?php 
			$result = mysqli_query($con,$orderLineQuery);
			while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
              <td><span class="text-muted"><?php echo $row['orderId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['userId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['productId']." ";?></span></td>
              <td><span class="text-muted"><?php echo $row['quantity']." ";?></span></td>
            </tr>
            <tr>
			<?php } ?>
          </tbody>
        </table>
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
      </div>
    </div>
  </div>

  <div class="footer">
    &copyDeveloped by Team 07
  </div>
</div>

</body>
</html>