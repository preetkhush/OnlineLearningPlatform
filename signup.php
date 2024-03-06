	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sign Up</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/registration.css">
		<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
        <script src="/js/validation.js" defer></script>
	</head>
	
	<body>
		<div id="container2">
			<img src="images/logo.svg" height="70">
			<h6>Khushi Learning Engine</h6> <br>
            <h5 style="font-weight: bold;">Sign Up</h5>
            
            <form action="signup.php" method="post" id="signup" novalidate>
            <input type="text" class="form-control" id="text" placeholder="First Name" name="name" required><br>
			<input type="email" class="form-control" id="text" placeholder="Email" name="email" required><br>
			<input type="password" class="form-control" id="text" placeholder="Password" name="password" required><br>
			<input type="password" class="form-control" id="text" placeholder="Re-type Password" name="password_confirmation" required><br>
			<input type="submit" name="register" class="form-control btn btn-success" id="button" value="Sign Up"><br><br>
			<p>Already have an account? <a href="login.php">Login Here</a></p>
            </form>		
<?php
$db = require __DIR__ . "/connection.php";

if (empty($_POST["name"])) {
    die("Name is required.");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required.");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters.");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter.");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number.");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match.");
}
?>
 
		</div>
	

<!-- Bootstrap & jQuery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	</body>
	</html>

	<!-- Code for user sign-up -->

<?php


$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$db = require __DIR__ . "/connection.php";

$sql = "INSERT INTO user (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $db->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $db->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password_hash);
                  
if ($stmt->execute()) {

    header("Location: success.html");
    exit;
    
} else {
    
    if ($db->errno === 1062) {
        die("Email already exist.");
    } else {
        die($db->error . " " . $db->errno);
    }
}
?>