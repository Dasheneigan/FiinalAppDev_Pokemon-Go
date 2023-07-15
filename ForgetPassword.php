<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myappdb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
unset($_SESSION['resetErrorMessage']);
unset($_SESSION['resetSuccessMessage']);

if (isset($_POST['reset'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        $_SESSION['resetErrorMessage'] = "New password and confirm password do not match!";
    } else {
        // Prepare and execute the SQL query to check if the email exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows === 0) {
            $_SESSION['resetErrorMessage'] = "The email you entered is not connected to an account.";
        } else {
            // Update the user's password in the database
            $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
            $stmt->bind_param("ss", $new_password, $email);
            $stmt->execute();
            $stmt->close();

            $_SESSION['resetSuccessMessage'] = "Password reset successful for email: $email";
        }
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<link href="//db.onlinewebfonts.com/c/7aaf86264d274ceac1540053674a378d?family=Mirandolina" rel="stylesheet" type="text/css"/>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	 <style>
	body {
		  display: flex;
		  align-items: center;
		  justify-content: center;
		  background: #f6f5f7;
		  font-family: 'Montserrat', sans-serif;
		  min-height: 100vh;
		  margin: 0;
		}
    .container {
            position: relative;
            right: 250px;
        }
        
    .go-back {
            position: absolute;
            top: 10px;
            left: 10px;
            text-decoration: none;
			font-weight: bold;
        }
        
    .reset-form {
            margin-top: 50px;
        }
        
    .background-image {
		  position: fixed;
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  background-image: url("https://static01.nyt.com/images/2020/01/21/multimedia/31xp-pokemongo/21xp-pokemongo-videoSixteenByNineJumbo1600.jpg");/* blurred background image of the website*/
		  background-size: cover;
		  filter: blur(10px); /* Apply the blur effect */
		  z-index: -1; /* Place the background image behind other elements */
}
	.logotext {
		  position: absolute;
		  top: 12%;
		  left: 85%;
		  transform: translate(-50%, -50%);
		  max-width: 30%;
		  max-height: 30%;
}

		.navbar {
			background-color: #060020;
			padding: 10px;
			display: flex;
			justify-content: center;
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			z-index: 9999;
		}

		.navbar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: center;
		}

		.navbar ul li {
			margin: 10px 10px;
			margin-left: 15px;
		}

		.navbar ul li a {
			text-decoration: none;
			color: white;
			font-weight: normal;
			font-size: 23px;
			text-transform: uppercase;
			transition: color 0.4s ease-in-out;
			font-family: 'Varela Round', sans-serif;
			padding: 5px 10px;
			position: relative;
			left: -224px; 
			margin: 0 20px;
			margin-left: -10px;
		}



		.navbar ul li a:hover {
			color: white;
			background-color: #827f68;
		}

		.container {
			margin-top: 50px;
		}
	.footer {
    background-color: #1f1a07;
    color: white;
    text-align: center;
    padding: 10px;
}

.footer p {
    margin: 0;
    font-size: 14px;
}
    </style>
</head>
<body>
<!--please put link in href="#" at the bottom-->
<nav class="navbar">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="room.php">MARKETPLACE</a></li>
            <li><a href="about.php">ABOUT</a></li>
        </ul>
    </nav>
	
	<div class="background-image"></div>
	<div class="wrapper">
    <div class="container">
        <a href="Form.php" class="go-back">Go back</a> 
		<img src="image/logotext.png" alt="Image" class="logotext">
        <div class="reset-form">
            <form action="#" method="POST">
                <h1 style="font-family: 'Roboto', sans-serif;">Reset Password</h1>
                <p style="font-family: 'Roboto', sans-serif;">Please enter your email and new password.</p>
                <?php if (isset($_SESSION['resetErrorMessage'])): ?>
                    <div class="error-message">
                        <?php echo $_SESSION['resetErrorMessage']; unset($_SESSION['resetErrorMessage']); ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['resetSuccessMessage'])): ?>
                    <div class="success-message">
                        <?php echo $_SESSION['resetSuccessMessage']; unset($_SESSION['resetSuccessMessage']); ?>
                    </div>
                <?php endif; ?>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="new_password" placeholder="New Password" required="">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
                <button type="submit" name="reset">Reset Password</button>
            </form>
        </div>
    </div>
	</div>
	<div class="footer">
    <p>&copy; © 2023 Pokémon GO</p>
</div>
</body>
</html>
