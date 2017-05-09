<?php

    require_once('core.php');
    require_once('database.php');

    if(isset($_POST['username']) && isset($_POST['password'])) {
    	
    		$username = $_POST['username'];
    		$password = $_POST['password'];
    		
    		$passHash = md5($password);
    		
    		if(!empty($username) && !empty($password))
    		{
    			$userpassQuery = "SELECT id FROM user WHERE username='".mysqli_real_escape_string($connection, $username)."' AND password='".mysqli_real_escape_string($connection, $passHash)."'";
    			// $s = $connection->query($userpassQuery);
    			// $userpassCount = $s->num_rows;
    			
    			if($query_run = mysqli_query($connection, $userpassQuery))
    			{
    				$query_num_rows = mysqli_num_rows($query_run);
    				if($query_num_rows==0)
    				{
    					echo "<h2>Invalid username/password combination.</h2>";
    				}
    				else if($query_num_rows==1){
    					$user_id = getResult($query_run, 0, 'id');
	    				$_SESSION['user_id'] = $user_id;
	    				header("Location: php/home.php");
    				}
    			}
    		}
    	}
?>

<!DOCTYPE html>
<html lang="en-us">

<head>
<meta charset="utf-8">
<title>Larry's Supplies</title>
<link rel="stylesheet" href="/styles/main.css">
</head>

<body>
	<div id="snowflakeContainer">
	    <p class="snowflake">*</p>
	</div>
	
	<div id="logo">
		<img src="../images/logo.png">
	</div>
	
	<div id="login_form">
	    
	    <form name="login" action="../index.php" method="POST">
	    
	    <label for="username">Username:</label>
	    <input type="text" id="username" name="username" required><br>
	    <label for="password">Password:</label>
	    <input type="password" id="password" name="password" required><br>
	    
	    <input type="submit" value="Login">
	    <p>Don't have an account? <a href="/php/register.php"><b><i>Click Here</i></b></a></p>
	    
	    </form>
	</div>
	
	
	<footer>Larry's supplies &copy;</footer>
<script src="js_scripts/fallingsnow_v6.js"></script>
</body>
</html>
