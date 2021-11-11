<?php
session_start();
//----------------------------------
include('connect/connect_db.php');
// Connect to database
$link = dbconnect();
//----------------------------------

$item_code = strip_tags($_GET['ic']);



$query = "SELECT * FROM product_list WHERE item_code = '$item_code'";
$result = mysql_query($query);	

$item_name = mysql_result($result,0,"item_name");
$item_description = mysql_result($result,0,"item_description");
$item_price = 9.99;

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
	
		echo "{ id: '$item_code', img: 'img_cat/$item_code.jpg', name: '$item_name', price: '$item_price' }";
       
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


<style>
.image-placement-holder {
display: flex;
justify-content: space-between;
flex-wrap: wrap;
}
.image-frame2 {
width:40%;
font-size:0.9em;
color:#000;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
margin:1em 1em 4em 1em;
}
.pic-holder {
display:flex;
align-items: center;
justify-content: center;
height:350px;
}
.image-frame2 img
{
border: 3px solid #000;
margin-bottom:0.5em;
padding:0.5em;
}
.image-frame2 .content
{
display: flex;
flex: 1 1 auto;
align-items: center;
}
.image-frame2 .info
{
display: flex;
width: 100%;
}
.image-frame2 .info-text
{
flex: 1 1 auto;
}
.image-frame2 p {
text-align:center;
}
.image-wishlist2 {
font-size:1.2em;
color:#999;
}
.image-wishlist2 i {
color:#ccc;
}
@media only screen and (max-width: 60em) 
{
.image-frame2 {
width:22%;
}
}
@media only screen and (max-width: 57em) 
{
.image-frame2 {
width:45%;
}
}
@media only screen and (max-width: 30em) 
{
.image-frame2 {
width:90%;
}
}

</style>

<div class="full-width-container content-centre">
<div class="content-a">
	<img src='img_cat/<?php echo $item_code; ?>.jpg' style="border: 1px solid #000;">
</div>
  
  
  <div class="content-b">
  <?php echo "<p>$item_name</p>"; ?>
  	<?php echo "<p>$item_description</p>"; ?>
	
	<br>
<br>
<div class='image-wishlist'><a class='toggle-wishlist' data-id='<? echo $item_code; ?>' href='#' title='Add to Wish List'><i class='far fa-heart'></i></a></div>
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