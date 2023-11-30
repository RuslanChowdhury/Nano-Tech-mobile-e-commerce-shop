<?php 

session_start();



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
      <!--top note-->
    
      
<!--banner-->
      <div class="container">
          
          
<div class="main_slider mb-5" style="background-image: url(homeimages/banner.jpg);image-fluid">
    
    <div class="container fill_height">
    <div class="row align-items-center fill_height">
        <div class="col">
        <div class="main_slider_content">
            <h6>Your one stop solution</h6>
            <h1>
            <div class="wrapper">
                <div class="static-txt">
                FOR
                </div>
                <ul class="dynamic-txt">
                <li><span>SMARTPHONES</span></li>
                <li><span>ACCESSORIES</span></li>
                <li><span>CONVERTERS</span></li>
                <li><span>AND MORE!!</span></li>
                </ul>
                
                </div>
            </h1>
            <div class="red_button shop_now_button"><a href="productpage1.php">SHOP NOW!</a></div>
            </div>
        </div>
        </div>
    </div>
      
</div>
</div>
      
      
<!-- CAROUSEL -->
      <div class="container">
<div id="carouselExampleIndicators" class="carousel carousel-dark-slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="homeimages/car11.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="homeimages/car22.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="homeimages/car33.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
      
      
      
<!--boxes-->
<div class="banner">
      <div class="container">
    
    <div class="row">
        <div class="col-md-4">
        <div class="banner_item align-item-center" style="background-image: url(homeimages/box1.jpg);">
            <div class="banner_catagory">
                <a href="productpage1.php">SMARTPHONES</a>
            </div>
            </div>
        
        </div>  
          <div class="col-md-4">
        <div class="banner_item align-item-center" style="background-image: url(homeimages/box2.jpg);">
            <div class="banner_catagory">
                <a href="productpage1.php">ACCESSORIES</a>
            </div>
            
            </div>
        </div> 
        <div class="col-md-4">
        <div class="banner_item align-item-center" style="background-image: url(homeimages/box3.jpg);">
            <div class="banner_catagory">
                <a href="productpage1.php">CONVERTERS</a>
            </div>
                </div>
        
             </div> 
          </div>
    </div>
</div>
      
<!--cards-->
      <div class="container mt-5 mb-5">
      <h2 style="text-decoration: underline;text-align:center;padding-bottom:15px">! Weekly Selection !</h2>
          <!--card-->
          <div class="row">
              
              <?php
              $sql = "SELECT * FROM `products` WHERE product_id<=3";
              $result = mysqli_query($conn, $sql);
             
              while($row=mysqli_fetch_assoc($result)){
                   $id = $row['product_id'];
                   $name = $row['product_name'];
                   $image = $row['product_imgsrc'];
                   $sdes = $row['product_sdes'];
                   $price = $row['product_price'];
               echo 
              
              
              
              '<div class="col-md-4">
              <div class="card" style="width: 18rem;">
              <form action="cart.php?id='.$id.'" method="post">
  <img src="'.$image.'" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">'.$name.'</h5>
    <p class="card-text">'.$sdes.'</p>
    <p class="card-text">৳'.$price.'</p>
    <a href="productdetails.php?catid='.$id.'" class="btn btn-secondary">View</a>
   
    <input type="submit" name="add_to_cart" href="cart.php?id='.$id.'" class="btn btn-secondary" value="Add to Cart" >
    </form>
  </div>
</div>
</div>';
              
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
    
        

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> 
<script src="https://use.fontawesome.com/d8125316b5.js"></script>
  </body>
</html>