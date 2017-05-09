<?php
	require_once('core.php');
	require_once('database.php');
	
	if(!Logged_in()) {
		
		if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordAgain'])) 
		{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password_again = $_POST['passwordAgain'];
				$password_hash = md5($password);
				
				if($password != $password_again) {
					echo "Passwords do not match.";
				}
				else {
					$query = "SELECT username FROM user WHERE username='$username'";
					$query_run = mysqli_query($connection, $query);
					
					if(mysqli_num_rows($query_run) == 1)
					{
						echo "The username is already in use";
					}
					else {
						$query = "INSERT INTO user (firstname, lastname, email, phone, username, password) VALUES 
						('".mysqli_real_escape_string($connection, $firstname)."','".mysqli_real_escape_string($connection, $lastname)."','".mysqli_real_escape_string($connection, $email)."','"
						.mysqli_real_escape_string($connection, $phone)."','".mysqli_real_escape_string($connection, $username)."','".mysqli_real_escape_string($connection, $password_hash)."')";
						
						
						echo $query;
						if($query_run = mysqli_query($connection, $query)){
							header('Location: register_success.php');
							
						} else {
							echo "Sorry, we cant register you right now.";
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
	<script src="/js_scripts/main.js"></script>
	</head>
	
	<body>
		<div id="snowflakeContainer">
		    <p class="snowflake">*</p>
		</div>
		
		<div id="logo">
			<img src="../images/logo.png">
		</div>
	    
	    <div>
	        <form name="login" action="register.php" method="POST">
		    <label for="firstname">First Name: </label>
		    <input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" required><br>
		    
		    <label for="lastname">Last Name: </label>
		    <input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" required><br>
		    
		    <label for="email">Email Address: </label>
		    <input type="email" id="email" name="email" value="<?php echo $email; ?>" required><br>
		    
		    <label for="phone">Phone Number (xxx-xxx-xxxx): </label>
		    <input type="tel" id="phone" pattern="\d{3}[\-]\d{3}[\-]\d{4}" name="phone" value="<?php echo $phone; ?>" required><br>
		    
		    <label for="username">Username:</label>
		    <input type="text" id="username" name="username"  value="<?php echo $username; ?>"required><br>
		    <label for="password">Password:</label>
		    <input type="password" id="password" name="password" required><br>
		    <label for="password">Re-type Password:</label>
		    <input type="password" id="passwordAgain" name="passwordAgain" required><br>  
		    
		    
		    <input type="submit" value="Register">
	    </div>
	    <footer>Larry's supplies &copy;</footer>
	<script src="../js_scripts/fallingsnow_v6.js"></script>
	</body>
	</html>
	
	
	<?php
		
	} else if(Logged_in()) {
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
			
			<?php echo '<h1>Oops! Looks like you\'re already logged in, ' .getuserfield('firstname').  ' '.'<a href="home.php">Click here to go to the home page.</a></h1> '; ?>
			<br>
			<br>
			<?php echo '<h2> Alternatively, <a href="logout.php"><i>Click Here</i></a> to log out</h2>'; ?>
		</div>
		
		</div>
		
		
	<script src="../js_scripts/fallingsnow_v6.js"></script>
	</body>
	</html>
	

<?php
	}
?>




