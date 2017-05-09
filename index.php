<?php
	require_once('php/core.php');
	require_once('php/database.php');
	
	
	if(Logged_in()) {
		?>
	<!DOCTYPE html>
	<html lang="en-us">
	
	<head>
	<meta charset="utf-8">
	<title>Larry's Supplies</title>
	<link rel="stylesheet" href="/styles/index.css">
	
	</head>
	
	<body>
		
		<div id="snowflakeContainer">
		    <p class="snowflake">*</p>
		</div>
		
		<div id="logo">
			<img src="../images/logo.png">
		</div>
		
		
		<div id="message">
			
			<?php echo '<h1>Oops! Looks like you\'re already logged in, ' .getuserfield('firstname').  ' '.'<a href="php/home.php">Click here to go to the home page.</a></h1> '; ?>
			<br>
			<br>
			<?php echo '<h2> Alternatively, <a href="php/logout.php"><i>Click Here</i></a> to log out</h2>'; ?>
		</div>
		
		</div>
		
		
	<script src="js_scripts/fallingsnow_v6.js"></script>
	</body>
	</html>

		
		
<?php		
		
		
		
		
	}else {
		include 'php/login.php';
	}

?>