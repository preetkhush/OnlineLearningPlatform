	<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $db = require __DIR__ . "/connection.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $db->real_escape_string($_POST["email"]));
    
    $result = $db->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/registration.css">
	</head>
	


	<body>
		<div id="container">
			<img src="images/logo.svg" height="70">
			<h6>Khushi Learning Engine</h6> <br><br>

			<?php if ($is_invalid): ?>
        <em>Invalid login</em>
        <?php endif; ?>

            <h5 style="font-weight: bold;">Log In</h5>
            <form method="post">
            	<input type="email" class="form-control" id="text" placeholder="Enter Your Email" name="email"
                 value="<?= htmlspecialchars($_POST["email"] ?? "") ?>"><br>

			    <input type="password" class="form-control" id="text" placeholder="Password" name="password"><br>
			    <input type="submit" class="form-control btn btn-success" id="button" value="Log In"><br><br>
			    <p>Don't have account? <a href="signup.php">Sign Up Here</a></p>
            </form>
			

		</div>


	
	</body>
	</html>