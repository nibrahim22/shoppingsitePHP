<!DOCTYPE html>
<html lang="en-us">

<?php
    require_once('core.php');
    require_once('database.php');

?>

<head>
<meta charset="utf-8">
<title>Larry's Supplies - Home</title>
<link rel="stylesheet" href="/styles/my-slider.css"/>
<script src="../js_scripts/ism-2.2.min.js"></script>
<script src="../js_scripts/jquery-3.1.1.min.js"></script>
<script src="../js_scripts/simpleCart.js"></script>
<link rel="stylesheet" href="/styles/home.css">
</head>

<body>
  
	
	<main>
	  
	  
	    
	<div class="banner">
    	<ul id="list-nav">
    	    <li><a class="active" href="home.php"><img id="home" src="../images/home-icon.png"></a></li>
    	    <li><a href="electronics.php">Electronics</a></li>
    	    <li><a href="toys.php">Toys</a></li>
    	    <li><a href="boardgames.php">Board Games</a></li>
    	    <li><a href="cookingsupplies.php">Cooking Supplies</a></li>
    	    <li><a href="testimonials.php">Testimonials</a></li>
    	    <li style="float:right"><a href="logout.php">Logout</a></li>
    	    <li style="float:right"><a href="shopping_cart.php"><img id="cart" src="../images/shopping-cart.png"></a></li>
    	    <div style="float:right; margin-top: 15px; color:black" class="simpleCart_total"></div>
    	</ul>
    	
    	<span id="login-greeting">
    	    <h1>
    	        <?php
    	            if(Logged_in()){
    	                echo "Welcome ".getuserfield('firstname')." ".getuserfield('lastname')."!";
    	            }
    	        ?>
    	    </h1>
    	    <h2><i>Featured Items:</i></h2>
    	</span>
	</div>
	
	
	<!--CAROUSEL, imported from imageslidermaker.com-->
	
    <div class="ism-slider" data-transition_type="fade" id="my-slider">
  <ol>
    <li>
      <img src="../images/1.jpg">
      <div class="ism-caption ism-caption-0">Samsung monitor with amazing picture - Only $1000! </div>
    </li>
    <li>
      <img src="../images/2.jpg">
      <div class="ism-caption ism-caption-0">Life sized teddy bear - Only $99.99</div>
    </li>
    <li>
      <img src="../images/3.jpg">
      <div class="ism-caption ism-caption-0">Amazing spoons that will change your life - Only $4.99!</div>
    </li>
  </ol>
</div>


    
	
	<!--END CAROUSEL-->
	
	<br>
	<br>
	<br>
	
	</main>
	<footer>Larry's supplies &copy;</footer>

</body>
</html>