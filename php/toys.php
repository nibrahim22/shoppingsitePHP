<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Larry's Supplies - Toys</title>
<script src="../js_scripts/jquery-3.1.1.min.js"></script>
<script src="../js_scripts/simpleCart.js"></script>
<link rel="stylesheet" href="/styles/pages.css">
</head>

<body>
	<div id="snowflakeContainer">
		    <p class="snowflake">*</p>
		</div>
	
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
    	    
    	    <h2><i>Toys</i></h2>
    	</span>
	</div>
	
	<div class="simpleCart_shelfItem">
		<div class="product-item">
		    <form method="post" action="">
		        <div class="product-image">
		            <img src="../images/products/teddy.jpg">
		        </div>
		        <div>
		            <h2 class="item_name">Lifesize Teddy Bear</h2>
		        </div>
		        <span class="item_price">
		        <div class="product-price">$99.99</div></span>
		        <div class="btnAddAction">
		            <input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
		        </div>
		    </form>
		</div>
	</div>
		
		<div class="simpleCart_shelfItem">
		<div class="product-item">
		    <form method="post" action="">
		        <div class="product-image">
		            <img src="../images/products/legos.jpg">
		        </div>
		        <div>
		            <h2 class="item_name">Lego Set</h2>
		        </div>
		        <span class="item_price">
		        <div class="product-price">$54.49</div></span>
		        <div class="btnAddAction">
		            <input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
		        </div>
		    </form>
		</div>
	</div>
		
		<div class="simpleCart_shelfItem">
		<div class="product-item">
		    <form method="post" action="">
		        <div class="product-image">
		            <img src="../images/products/knex.jpg">
		        </div>
		        <div>
		            <h2 class="item_name">K'nex Set</h2>
		        </div>
		        <span class="item_price">
		        <div class="product-price">$34.99</div></span>
		        <div class="btnAddAction">
		            <input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
		        </div>
		    </form>
		</div>
	</div>
		
		<div class="simpleCart_shelfItem">
		<div class="product-item">
		    <form method="post" action="">
		        <div class="product-image">
		            <img src="../images/products/barbie.jpg">
		        </div>
		        <div>
		            <h2 class="item_name">Barbie Doll</h2>
		        </div>
		        <span class="item_price">
		        <div class="product-price">$19.99</div></span>
		        <div class="btnAddAction">
		            <input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
		        </div>
		    </form>
		</div>
	</div>
		
		<div class="simpleCart_shelfItem">
		<div class="product-item">
		    <form method="post" action="">
		        <div class="product-image">
		            <img src="../images/products/actionfigures.jpg">
		        </div>
		        <div>
		            <h2 class="item_name">Marvel Action Figures</h2>
		        </div>
		        <span class="item_price">
		        <div class="product-price">$29.99</div></span>
		        <div class="btnAddAction">
		            <input type="submit" value="Add to Cart" <a href="javascript:;" class="item_add"></a>
		        </div>
		    </form>
		</div>
	</div>
	
	<br>
	<br>
	<br>
	
	</main>
	<footer>Larry's supplies &copy;</footer>
	<script src="../js_scripts/fallingsnow_v6.js"></script>
</body>
</html>