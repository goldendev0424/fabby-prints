<?php
session_start();
//----------------------------------
include('connect/connect_db.php');
// Connect to database
$link = dbconnect();
//----------------------------------

$query = "SELECT * FROM categories WHERE category_id = '8'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$i=0;
while ($i < $num) 
	{	
	$category_name = mysql_result($result,$i,"categories");
	$i++;
	}





$query = "SELECT * FROM product_list INNER JOIN item_category ON product_list.item_code = item_category.item_code WHERE item_category.category_id = '8' LIMIT 16";
$result = mysql_query($query);	
$item_list = mysql_num_rows($result);
$x=0;

$item_code = array();
$item_name = array();

$x=0;
while($x < $item_list)
	{			
	$item_code[$x] = mysql_result($result,$x,"item_code");
	$item_name[$x] = mysql_result($result,$x,"item_name");
	$item_price[$x] = 9.99;
	$x++;
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
  <title>Fabby Prints</title>

  <!--[if lt IE 9]><script src="libs/html5shiv.js"></script><![endif]-->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=El+Messiri&display=swap">

  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/template.css">
</head>

<body>
<?php
	echo "<script> var postersArr = [";
	$x=0;
      while($x < $item_list)
      {
	  // $img = '"./img/' . $item_code[$x] . '.jpg"';
    $i = ($x%2) + 1;
    $img = '"./img/' . $i . ($i === 1 ? '.jpeg"' : '.png"');
	  $name = json_encode($item_name[$x]);
      echo "{ id: $item_code[$x], img: $img, name: $name, price: '$item_price[$x]' },";
      
      if ($x == ($item_list-1))
        {
		echo "{ id: '$item_code[$x]', img: $img, name: $name, price: '$item_price[$x]' }";
        }
      $x++;
      }
	  echo "];
  window.gPostersArr = postersArr;
  </script>";
?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Glass+Antiqua&display=swap');
</style>

<header role="banner">
    <div class="header-container">

      <div class="logo">
        <!-- Fabby Prints LOGO -->
        <a href="index.php" class="head-txt2" role="button" title="Fabby Prints">Fabby Prints</a>
      </div>

      <div class="pc-menu-set">
        <!-- Header Contact Options for PC/Laptops -->
        <ul>
          <li><a class="btn-open-wishlist-modal" data-btn-name="favo" href="#"><span style="color:#FF0000;"><i class="fas fa-heart"></i></span>
            <span class="wishlist-count" style="font-size:1em; padding-left:0.5em;"></span></a></li>
			
          <li><a class="btn-open-wishlist-modal" data-btn-name="visited" href="#"><i class="far fa-eye"></i> <span
                style="font-size:1em; padding-left:0.5em;">0</span></a></li>
				
          <li><a href="shopping-bag.php"><i class="fas fa-shopping-bag"></i> <span
                style="font-size:1em;  padding-left:0.5em;">0</span></li>
        </ul>
      </div>

      <div class="mobile-menu-set">
        <!-- Header Contact Options for Mobile Devices -->
        <ul>
          
          <li><a href="#" id="button" onClick="$('nav').slideToggle('slow');"><i class="fa fa-bars"></i></a></li>

		  
		  
		  <li><a href="shopping-bag.php"><i class="fas fa-shopping-bag"></i>
		  <li><a class="btn-open-wishlist-modal" data-btn-name="visited" href="#"><i class="far fa-eye"></i></li></a>
		  <li><a class="btn-open-wishlist-modal" data-btn-name="favo" href="#"><i class="fas fa-heart"></i></a></li>
          
        </ul>
      </div>

    </div>
</header>

  <?php include('./common/wishlist.php'); ?>

  <div class="header-fixed-padding">
    <!-- Allow Padding Space for Fixed Header div -->
  </div>


  <div class="nav-m-contact-container">
    <div class="nav-m-contact-menu">
      <ul>
        <li><a href="get-in-touch.php"><i class="fa fa-phone"></i> 0800 240 4749</a></li>
        <li><a href="get-in-touch.php"><i class="fa fa-comments"></i> Email Us</a></li>
        <li><a href="members-login.php"><i class="fa fa-user"></i> Members Login</a></li>
      </ul>
    </div>
  </div>

  <div class="nav-m-fixed-padding">
    <!-- Allow Padding Space for Fixed Nav divs -->
  </div>


  <nav role="navigation">
    <div class="nav-container">
      <ul class="mega-menu d-flex">
        <li class="has-dropdown">
          <a href="index.php">PRINTS <i class="fas fa-chevron-down"></i></a>
          <div class="dropdown-container desktop">
            <div class="dropdown d-flex justify-content-between">
              <div class="dropdown-left d-flex justify-content-between">
                <div class="dropdown-left-left">
                  <h4 class="dropdown-title">PRINTS</h4>
                  <ul class="dropdown-menu">
                    <li><a href="#">All Prints</a></li>
                    <li><a href="#">Latest Prints</a></li>
                    <li><a href="#">Most Popular</a></li>
                    <li><a href="#">Gift Card</a></li>
                  </ul>
                </div>

                <div class="dropdown-left-right">
                  <h4 class="dropdown-title">CATEGORIES</h4>
                  <ul class="dropdown-menu">
                    <li><a href="#">Most Popular</a></li>
                    <li><a href="#">Latest Prints</a></li>
					
                    <li><a href="#">Nature & Botanical</a></li>
                    <li><a href="#">Animal</a></li>
                    <li><a href="#">Illustrations & Abstract</a></li>
                    <li><a href="#">Fashion</a></li>
                    <li><a href="#">Typography & Quotes</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Maps & Cities</a></li>
                    <li><a href="#">Kitchen</a></li>
                    <li><a href="#">Black & White</a></li>
                    <li><a href="#">Vintage</a></li>
                    <li><a href="#">Architecture</a></li>
                    <li><a href="#">Mindfulness</a></li>
                    <li><a href="#">Love</a></li>
                    <li><a href="#">Sizes</a></li>
                  </ul>
                </div>
              </div><!-- .dropdown-left -->

              <div class="dropdown-right">
                <a href="#">
                  <img src="https://images.posterstore.com/dropdown-posters.jpg?auto=format&amp;fit=crop&amp;h=260&amp;w=595&amp;s=0098b49597cba0d0705b8c51f6a021b5" />				 </a>			  </div>
            </div>
          </div>
        </li>
        <li><a href="how-it-works.php">MOST POPULAR</a></li>
        <li><a href="questions.php">LATEST PRINTS</a></li>
        <li><a href="pricing.php">INSPIRATION</a></li>
        <li><a href="client-reviews.php">REACH OUT</a></li>
      </ul>
    </div>
  </nav>

<!--  <div class="page-intro3 content-centre">
    <div class="full-width-container" style="padding:0; width:40%;">
      <h3 style="color:#fff; font-size:1.6em; padding-top:0.5em;">Free Delivery</h3>
      <p style="color:#d3d3d3; padding-bottom:1.5em;">Right here is where you'll find stunning posters inspired by
        Scandinavian design. Posters are a perfect tool to personalise the interior in any room of your house. Happy
        shopping!</p>
    </div>
  </div>
-->


<br>
<br>
<br>

<div class="full-width-container">
<?php 
echo $category_name;
?>
</div>

<div class="full-width-container content-centre">
  <div class="image-placement-holder">
	<?php
	$x=0;
	while($x < $item_list)
		{			
      
    $i = ($x%2) + 1;
    $img = './img/' . $i . ($i === 1 ? '.jpeg' : '.png');
    echo "<div class='image-frame'>
		  <div class='content'>
        <a href='product_display_item.php?ic=$item_code[$x]'><img src='$img'></a>
      </div>
		  <div class='info'>
        <div class='info-text'>
          <p class='info-title'>$item_name[$x]</p>
          <p>£$item_price[$x]</p>
        </div>
        <div class='image-wishlist'>
          <a class='toggle-wishlist' data-id='$item_code[$x]' href='#' title='Add to Wish List'><i class='far fa-heart'></i></a>
        </div>
      </div>
		</div>";
		 
		$x++;
		}	
	?>    
  </div>
</div>





<footer role="contentinfo">
<div class="footer-container">

  <div class="footer-header-nav">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="how-it-works.php">How it Works</a></li>
	  <li><a href="questions.php">Questions</a></li>
	  <li><a href="pricing.php">Pricing</a></li>
	  <li><a href="client-reviews.php">Client Reviews</a></li>
	  <li><a href="sign-up.php">Sign Up</a></li>
	  <li><a href="get-in-touch.php">Get in Touch</a></li>
	  <li><a href="members-login.php">Members Login</a></li>
	</ul>
  </div>

  <div class="footer-text-container">
	<!-- Fabby Prints -->
	<a href="index.php" class="footer-txt" role="button" title="Fabby Prints">FABBY PRINTS</a>
  </div>

  <ul>
	<li><a href="privacy-policy.php" class="footer-links">Privacy Policy</a></li>
	<li><a href="spamming-policy.php" class="footer-links">Spamming Policy</a></li>
	<li><a href="get-in-touch.php" class="footer-links"><i class="fa fa-comments"></i>Contact Us</a></li>
	<li><a href="get-in-touch.php" class="footer-links"><i class="fa fa-phone"></i>0800 240 4749</a></li>

	<li class="cookie-free"><!--<img src="images/cookie-icon.png">-->This website is cookie free</li>
  </ul>

  <p><strong><i class="fa fa-copyright"></i> Fabby Prints
	  <? echo date("Y"); ?>.
	</strong> Made in the United Kingdom. All rights reserved.</p>

</div>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/2e71692c1b.js" crossorigin="anonymous"></script>

  <script src="js/common.js"></script>
  <script src="js/web-model.js"></script>
  <script src="js/wishlist.js"></script>
  <script src="js/visited.js"></script>
</body>

</html>