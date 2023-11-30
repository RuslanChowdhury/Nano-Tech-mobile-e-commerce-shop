<?php 

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

   <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="images/projectlogo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-8/css/all.min.css" integrity="sha512-bSZEw4uG1xpcaR4ZoNYTsTssbBNq00EMRuS8e2tbE7+gXqVSBbaZIqqvjMDBnde5B4CkMBuaLG6kk7mxdIjF8w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>NANO-Tech</title>
</head>
<body>
     <?php include 'dbconnect.php';?>
    <div class="container">
          <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
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
          echo '<li><a class="dropdown-item" href="login.php">'.$_SESSION['username'].'
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



<div>
    <h2 class="text-center m-4">Our Location</h2>
     <div class="m-2 ">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.538758124297!2d90.40448511454339!3d23.763821984582716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77decb5f845%3A0xc2eadd2f3b867792!2sAhsanullah%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1633439737275!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
     </div>
</div>




<!-- our contact info section -->

<div class="bg-dark p-5">
    <div>
        <br>
    <h2 class="text-center text-white">Our Contact Info</h2>
    <br><br>
    </div>

<div class="container text-center">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem;border:none;box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;">
    
  <div class="card-body">
    <h4 class="card-title">Address</h4>
    <i class="fas fa-2x fa-map-marker-alt"></i>
    <p class="card-text">141 & 142, Love Rd, Dhaka 1208</p>
    
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;border:none;box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;">
  
  <div class="card-body">
    <h4 class="card-title">Email</h4>
    <div class="p-2">
    <i class="fas fa-2x fa-envelope-open-text"></i>
    <p class="card-text">info.webteam@nanotechbd.com</p><br>
    </div>
    
  </div>
</div>
    </div>
    <div class="col-sm">
    <div class="card" style="width: 18rem;border:none;box-shadow: rgba(240, 46, 170, 0.4) 5px 5px, rgba(240, 46, 170, 0.3) 10px 10px, rgba(240, 46, 170, 0.2) 15px 15px, rgba(240, 46, 170, 0.1) 20px 20px, rgba(240, 46, 170, 0.05) 25px 25px;">
  
  <div class="card-body">
    <h4 class="card-title">Support</h4><br>
    <i class="fas fa-2x fa-phone"></i>
    <h3>2441193</h3>
   
  </div>
</div>
    </div>
  </div>
</div>
</div>



<!-- Sales Outlets section -->










<div class="container bg-dark text-white mt-5 rounded">
  <br><br>
  <h2 class="text-center container">Please Enter Your Concerns Here.....</h2><br>
  <div class="text-center container">
    <i class="fas fa-4x fa-exclamation"></i>
    <i class="fas fa-4x fa-exclamation"></i>
    <i class="fas fa-4x fa-exclamation"></i>
  </div>
  
  <div>
    <form action="contactus.php"  method="post" class="m-5">

    <div class="form-group p-3">
    <label for="name">User Name</label>
    <input type="text" class="form-control" name="username" id="user_name" aria-describedby="emailHelp">

    
    </div>


    <div class="form-group p-3">
    <label for="exampleInputEmail1">Email address</label>
    
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    
    </div>

  

  <div class="form-group p-3">
    <label for="exampleFormControlTextarea1">Enter Your Message</label>
    <textarea class="form-control"  name="message" id="message" rows="3" placeholder="Enter your message here..."></textarea>
  </div>


  
  <button type="submit" name="update" class="btn btn-primary m-3">Submit</button>

  </form>
      <?php
      
       if (isset($_POST['update'])) {
	$name = $_POST['username'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
		
		      
		
			$sql = "INSERT INTO customerfeedback(feedname,feedmail,feedtext) VALUES ('$name','$email','$message')"; 
			echo $sql;		
			$result = mysqli_query($conn, $sql);
            
			if ($result) {
				$_POST['username'] = "";
	            $_POST['email'] = "";
	            $_POST['message'] = "";
                echo "<script>alert('Message sent ,check your mail for reply.');  window.location.href = 'contactus.php';</script>";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		
		
	} 

      
      
      ?>
  </div>
</div>
          <!--Footer-->
      
      <div class="footer">
  <!-- Begin Footer Static Top Area -->
  <div class="footer-static-top">
      <div class="container">
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
    


</body>


</html>