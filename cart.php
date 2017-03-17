

<?php
session_start();
include("functions/functions.php");
?>


<html lang="en">


<head> 
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>




<body>
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
            <li><a href="#">Price $<?php total_price();?></a></li>
            <li><a href="#">Total Items:  <?php total_items(); ?></a></li>
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

      <br/>

      <div>Brands</div>
      <?php
        getBrands();
      ?>
 
   </div>

    <?php cart();?>

   <div class="col-xs-12 col-sm-6 col-lg-8" id="mainbar">
      <div id="products_box">
       <form action=""  method="post" enctype="multipart/form-data">
         
         <table align="center" width ="700">
           
           <tr align="center">
           <th>Remove</th>
           <th>Product</th>
           <th>Quantity</th>
           <th>Total price</th>
           </tr>


           <?php
            global $con;
            $total =0;
            $ip = getIp();
            $sel_price = "select * from cart where ip_add='$ip'";
            $run_price = mysqli_query($con,$sel_price);

            while($p_price=mysqli_fetch_array($run_price)){
              $pro_id = $p_price['p_id'];
              $pro_price = "select * from products where product_id ='$pro_id'";
              $run_pro_price = mysqli_query($con,$pro_price);
              
              while($pp_price = mysqli_fetch_array($run_pro_price)){
                $product_price= array($pp_price['product_price']);
                $product_title = $pp_price['product_title'];
                $product_image = $pp_price['product_image'];
                $single_price = $pp_price['product_price'];
                $values = array_sum($product_price);
                $total +=$values;
              
           ?>

           <tr align="center">
             <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>"></input></td>
             <td><?php echo "$product_title"; ?><br>
             <img src="admin_area/product_images/<?php echo $product_image; ?>" width="60" height= "60">
             </td>
             <td><input type="text" size="6" name="qty" value="<?php echo $_SESSION['qty']; ?>" ></td>

             <?php
             if (isset($_POST['update_cart'])) {
               # code...
                $qty = $_POST['qty'];
                $update_qty = "update cart set qty='$qty'";

                $run_qty = mysqli_query($con,$update_qty);

                $_SESSION['qty'] = $qty;
                $total = $total*$qty;
              }
             ?> 

            <td><?php echo "$".$single_price; ?></td>
           </tr>

           

           <?php }} ?>
           <tr align="right">
             <td colspan="5">
               <b>Sub Toatal :</b>
             </td>
             <td><?php echo "$".$total; ?></td>
           </tr>

           <tr> 
           <td><input type="submit" name="update_cart" value="update cart"></input></td>
           <td><input type="submit" name="continue" value="continue shopping"></input></td>
           <td><button><a href="checkout.php">Checkout</button></a></td>
           </tr>

         </table>

       </form>

       <?php

       function updatecart(){
           global $con;
           $ip = getIp();

           if (isset($_POST['update_cart'])) {
             # code...
            foreach ($_POST['remove'] as $remove_id) {
              # code...
              $delete_product="delete from cart where p_id='$remove_id' AND ip_add ='$ip'";

              $run_delete = mysqli_query($con,$delete_product);
              if ($run_delete) {
                # code...
                echo "<script>window.open('cart.php','_self')</script>";

              }
            }
           }

           if (isset($_POST['continue'])) {
             # code...
            echo "<script>window.open('index.php','_self')</script>";
           }
      }
              

          echo @$up_cart = updatecart();

       ?>





      </div>

   </div>
   
</div>
</div>

</body>
</html>
