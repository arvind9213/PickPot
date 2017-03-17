

<?php
include("functions/functions.php");
?>


<html lang="en">


<head> 
  <title>Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>




<body  >


<nav class="navbar navbar-default navbar-fixed-top" style="margin: -1;">
  
  <div class="container-fluid" id="nav1">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">PickPOT</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right" id="navel">
         <form class="navbar-form navbar-left" role="search" method="get" action="results.php" enctype="multipart/form-data">
        
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="user_query" id="srch-term" style="width: 300px;">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit" name="search"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
      </form>
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="all_products.php">All Products</a></li>
            <li role="separator" class="divider"></li>

            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Contact <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#">About us</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><span class="glyphicon glyphicon-user"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Welcome Guest</a></li>
            <li><a href="customer/my_account.php">My Account</a></li>
            <li role="separator" class="divider"></li>
             <li><a href="cart.php">Sign Up</a></li>
           
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><span class="glyphicon glyphicon-shopping-cart"><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Welcome Guest</a></li>
            <li><a href="#">Price</a></li>
            <li><a href="#">Total Items</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="cart.php">Goto Cart</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="index.php">Add to cart</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  
<div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="images/7028961-abstract-hd-backgrounds.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/mediterranean_sea_coast-wide.jpg" alt="sas" width="460" height="345">
        <div class="carousel-caption">
          <h3>ania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/cute-wallpaper-208.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/images.jpg" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>



<div class="container">
  <div class="row">
   <div class="col-xs-6 col-lg-4" id="sidebar">

      <div>Categories</div>

   <?php
    getCats();
   ?>
   <!--  <table class="table">
    <thead>
      <tr>
        <th>Categories</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Laptops</td>        
      </tr>
      <tr>
        <td>Computers</td>
      </tr>
      <tr>
        <td>Mobiles</td>
      </tr>
      <tr>
        <td>Cameras</td>
      </tr>
      <tr>
        <td>Ipads</td>
      </tr>
      <tr>
        <td>Tablets</td>
      </tr>
    </tbody>
  </table> -->
        <div>Brands</div>

 <?php
    getBrands();
   ?>
 <!--  <table class="table">
    <thead>
      <tr>
        <th>Brands</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Apple</td>        
      </tr>
      <tr>
        <td>Samsung</td>
      </tr>
      <tr>
        <td>Sony</td>
      </tr>
      <tr>
        <td>Dell</td>
      </tr>
      <tr>
        <td>Lenovo</td>
      </tr>
      <tr>
        <td>Asus</td>
      </tr>
      <tr>
        <td>Hp</td>
      </tr>
    </tbody>
  </table> -->
   </div>
   <div class="col-xs-12 col-sm-6 col-lg-8" id="mainbar">
      <div id="products_box">
       <?php
       if (isset($_GET['search'])) {
          # code...
      $search_query = $_GET['user_query'];

       $get_pro = "select * from products where product_keywords like '%$search_query%'";
        $run_pro  =mysqli_query($con ,$get_pro);

        while ($row_pro=mysqli_fetch_array($run_pro)) {
        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_brand = $row_pro['product_brand'];
        $pro_title = $row_pro['product_title'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];
      
        echo "
            <div id='single_product'>
            <h3>$pro_title</h3>
            <img src='admin_area/product_images/$pro_image' width='180' height='180' /> 

            <p><b>$ $pro_price</b></p>
            <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
            <a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add to cart</button> </a>
            </div>

          ";

      }

      }
       ?>

      </div>

   </div>
   
</div>
</div>

</body>
</html>
