<?php 

session_start();

if (!isset($_SESSION['username'])){
    header("Location: login.php");
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="homestyle.css">
      <link rel="shortcut icon" type="image/x-icon" href="images/projectlogo.png">
    <title>NANO TECH HOME</title>
  </head>
  <body>
       <?php include 'dbconnect.php';?>
      <!--header-->
<div class="container">
          <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="homeimages/projectlogo.png" style="width:100px;height:50px">   </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="productpage1.php">SHOP</a>
        </li>
        <?php
          if (!isset($_SESSION['username'])) {
    echo '<li class="nav-item">
          <a class="nav-link disabled">
          
          Offers
           
          </a>
        </li>';
      }
          else{
           echo    '<li class="nav-item">
          
          <a class="nav-link active" href="offers.php">
          Offers
         
          </a>
          
        </li>';
          }
        
            ?>
      </ul>
      <div class="dropdown">
  <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: antiquewhite">
      <img src="homeimages/user.png">
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <?php  
      if (!isset($_SESSION['username'])){
    echo '<li><a class="dropdown-item" href="login.php">Login
        <img src="homeimages\login.png" style="width:40px;height:30px;" ></a></li>
       <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Profile
        <img src="homeimages\profile.png" style="width:35px;height:30px;" ></a></li>
      <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">Logout
        <img src="Images\logout.png" style="width:25px;height:25px;" ></a></li>';
      }else{
          echo '<li><a class="dropdown-item" href="#">'.$_SESSION['username'].'
        <img src="homeimages\profile.png" style="width:35px;height:30px;" ></a></li>
      <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="logout.php">Logout
        <img src="Images\logout.png" style="width:25px;height:25px;" ></a></li>';
      }
        ?>
  </ul>
    
          
</div>
       <div class="cart">
        <a href="cart.php" class="btn btn-outline-success">CART</a>
            
        
        
        </div>
    </div>
      
      
  </div>
              
</nav>
</div>
<!--banner-->
      <div class="container">
          

    
   <?php echo 
    '<h1>Welcome ' . $_SESSION['username'] . '</h1>'; 
           ?>
    <a href="logout.php">Logout</a>
</div>
      
      
<!-- CAROUSEL -->

      
      
      
<!--boxes-->

<!--cards-->

      
      <!--cards2-->
       <div align="center" class="container mt-5 mb-5">
           <div class="col-md-6 mb-5">
               <?php echo 
    '<h1 >Welcome ' . $_SESSION['username'] . '</h1>'; 
           ?>
               <h4 class="text-decoration-underline">EDIT YOUR PROFILE</h4>
               <form action="" method="post">
    <?php
             $currentuser= $_SESSION['username'];
               $sql = "SELECT * FROM `users` WHERE username='$currentuser'";
               $results = mysqli_query($conn,$sql);
               if($results){
                   if(mysqli_num_rows($results)>0){
                       while($row=mysqli_fetch_array($results)){
                           ?>
                           <div class="form-group mb-5">
                               <label for="username1" class="form-label">USERNAME</label>
                                <input type="text" id="username1" name="username" class="form-control" value="<?php echo $row['username']; ?>" disabled>
                               </div>
                               <div class="form-group mb-5">
                                   <label for="email1" class="form-label">E-MAIL</label>
                                <input type="email" id="email1" name="email" class="form-control" value="<?php echo $row['email']; ?>">
                               </div>
               <?php
                       }
                   }
               }
               ?>
               

<div class="form-group mb-5">
<input type="password" placeholder="new password" name="password" class="form-control" value="">
</div>
<div class="form-group mb-5">
<input type="password" placeholder="confirm new password" name="cpassword" class="form-control" value="">
</div>
<div class="form-group mb-5">
<input type="submit" name="update" class="btn btn-info" value="Update">
</div>
</form>
              <?php
               if (isset($_POST['update'])) {
	$username = $_SESSION['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
    
	if ($password == $cpassword) {
		
		      
		
			$sql = "UPDATE users set  email='$email', password='$password' WHERE username='$username'"; 
					
			$result = mysqli_query($conn, $sql);
            
			if ($result) {
				
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
                echo "<script>alert('Update Complete!.');  window.location.href = 'welcome.php';</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
               
                   ?>
   

          
 </div>
</div>
          

      
      <!--Footer-->
      
      <div class="footer">
  <!-- Begin Footer Static Top Area -->
  <div class="footer-static-top">
      <div class="container mt-5">
          <!-- Begin Footer Shipping Area -->
          <div class="footer-shipping pt-60 pb-55 pb-xs-25">
              <div class="row">
                  <!-- Begin  Shipping Inner Box Area -->
                  <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                      <div class="li-shipping-inner-box">
                          <div class="shipping-icon">
                              <img src="homeimages/shipping-icon/1.png" alt="Shipping Icon">
                          </div>
                          <div class="shipping-text">
                              <h2>Free Delivery</h2>
                              <p>And free returns. See checkout for delivery dates.</p>
                          </div>
                      </div>
                  </div>
                  <!--  Shipping Inner Box Area End Here -->
                  <!-- Begin  Shipping Inner Box Area -->
                  <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                      <div class="li-shipping-inner-box">
                          <div class="shipping-icon">
                              <img src="homeimages/shipping-icon/2.png" alt="Shipping Icon">
                          </div>
                          <div class="shipping-text">
                              <h2>Safe Payment</h2>
                              <p>Pay with the world's most popular and secure payment methods.</p>
                          </div>
                      </div>
                  </div>
                  <!--  Shipping Inner Box Area End Here -->
                  <!-- Begin Shipping Inner Box Area -->
                  <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                      <div class="li-shipping-inner-box">
                          <div class="shipping-icon">
                              <img src="homeimages/shipping-icon/3.png" alt="Shipping Icon">
                          </div>
                          <div class="shipping-text">
                              <h2>Shop with Confidence</h2>
                              <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                          </div>
                      </div>
                  </div>
                  <!--  Shipping Inner Box Area End Here -->
                  <!-- Begin  Shipping Inner Box Area -->
                  <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                      <div class="li-shipping-inner-box">
                          <div class="shipping-icon">
                              <img src="homeimages/shipping-icon/4.png" alt="Shipping Icon">
                          </div>
                          <div class="shipping-text">
                              <h2>24/7 Help Center</h2>
                              <p>Have a question? Call a Specialist or chat online.</p>
                          </div>
                      </div>
                  </div>
                  <!--  Shipping Inner Box Area End Here -->
              </div>
          </div>
          <!-- Footer Shipping Area End Here -->
      </div>
  </div>
  <!-- Footer Static Top Area End Here -->
  <!-- Begin Footer Static Middle Area -->
  <div class="footer-static-bottom">
      <div class="container">
          <div class="footer-logo-wrap pt-50 pb-35">
              <div class="row">
                  <!-- Begin Footer Logo Area -->
                  <div class="col-lg-4 col-md-6">
                      <div class="footer-logo">
                          <img src="Images/projectlogo.png" alt="Footer Logo" style="width:180px;height:90px;" >
                          <p class="info">
                             
                          </p>
                      </div>
                      <ul class="description">
                          <li>
                              <span>Developed </span>
                              By:<br>Ruslan Chowdhury<br>Sakibur Rahman
                          </li>
                          
                      </ul>
                  </div>
                
                  <!-- Begin Footer Block Area -->
                  <div class="col-lg-4 col-md-5 col-sm-6">
                      <div class="footer-block">
                          <h3 class="footer-block-title">Our company</h3>
                          <ul>
                              <li><a href="aboutus.php">About Us</a></li>
                            
                              <li><a href="teampage.php">Team</a></li>
                              <li><a href="contactus.php">Contact us</a></li>
                          </ul>
                      </div>
                  </div>
                  <!-- Footer Block Area End Here -->
                  <!-- Begin Footer Block Area -->
                  <div class="col-lg-4">
                      <div class="footer-block">
                          <h3 class="footer-block-title">Payment Mehtod</h3>
                          <ul class="social-link">
                            <img src="Images/payment/1.png" alt="">
                            </ul>
                      </div>
                      
                      <!-- Footer Newsletter Area End Here -->
                  </div>
                  <!-- Footer Block Area End Here -->
              </div>
          </div>
      </div>
  </div>
  
</div>
    
     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
<script src="https://use.fontawesome.com/d8125316b5.js"></script>
  </body>
</html>