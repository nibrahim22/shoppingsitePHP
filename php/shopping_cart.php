
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Larry's Supplies - Electronics</title>

<link rel="stylesheet" href="/styles/cart.css">
<script src="../js_scripts/jquery-3.1.1.min.js"></script>
<script src="../js_scripts/simpleCart.js"></script>

</head>

<script>
  simpleCart({
    checkout: {
      type: "PayPal",
      email: "nickibrahim22@gmail.com"
    }
  });
</script>

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
    	<h3>Key:</h3>
    <div class="simpleCart_items"></div>
	<div id="message">
		You have <span class="simpleCart_quantity"></span> items in your Cart.
    	Cart total: <div class="simpleCart_total"></div>
	</div>
	
	
    <input type="button" value="Checkout"<a href="javascript:;" class="simpleCart_checkout"></a>
    <input type="button" value="Empty Cart"<a href="javascript:;" class="simpleCart_empty"></a>
    

	
	<br>
	<br>
	<br>
	</main>
	<footer>Larry's supplies &copy;</footer>
	
</body>
</html>