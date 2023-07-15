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
unset($_SESSION['errorMessage']);
unset($_SESSION['registrationSuccessMessage']);
// Handle sign-up form submission
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password !== $confirm_password) {
        $_SESSION['errorMessage'] = "Passwords do not match!";
    } else {
        // Prepare and execute the SQL query to insert the user's information
        $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);
        $stmt->execute();
        $stmt->close();

        $_SESSION['registrationSuccessMessage'] = "Registration Successful<br>Name: $name<br>Email: $email";
    }
}
//Deals with the sign in submissions
if (isset($_POST['signin'])) {
    $email = $_POST['email'];

    // Prepare and execute the SQL query to check if the email exists in the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows === 0) {
        $_SESSION['errorMessage'] = "The email you entered<br> isn't connected<br> to an account.";
    } else {
        $user = $result->fetch_assoc();
        $password = $_POST['password'];

        // Verify the password if it matches or not
        if ($password === $user['password']) {
            // Password is correct, continue with the sign-in process
            // Redirect the user to loginpage.php
            header("Location: index.php"); //Redirect the user to the landing page (change the loginpage.php)
            exit();
        } else {
            $_SESSION['errorMessage'] = "Invalid password.";
        }
    }
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
<link href="//db.onlinewebfonts.com/c/7aaf86264d274ceac1540053674a378d?family=Mirandolina" rel="stylesheet" type="text/css"/>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
	
	<!--please put link in href="#" at the bottom-->
	<nav class="navbar">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="marketplace.php">MARKETPLACE</a></li>
            <li><a href="about.php">ABOUT</a></li>
        </ul>
    </nav>
	 <div class="background-image"></div>
	 <div class="wrapper">
    <div class="container">
        <div class="sign-in">
            <form action="#" method="POST">
                <h1>Sign in</h1>
               
                <p>or use your account</p>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
				<input type="checkbox" name="remember" name="remember" value="remember">
				<label>Remember Me</label>				
                <a href="ForgetPassword.php">Forget Your Password?</a>
                <button type="submit" name="signin">Sign In</button>
				<?php if (isset($_SESSION['errorMessage'])): ?>
                    <div class="error-message">
                        <?php echo $_SESSION['errorMessage']; unset($_SESSION['errorMessage']); ?>
                    </div>
                <?php endif; ?>
            </form><br>		
        </div>
        <div class="sign-up">
            <form action="#" method="POST">
                <h1>Create Account</h1>
                <p>or use your email for registration</p>
                <input type="text" name="name" placeholder="Name" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required="">
                <button type="submit" name="signup">Sign Up</button>
                <?php if (isset($_SESSION['registrationSuccessMessage'])): ?>
                <div class="result">
                    <?php echo $_SESSION['registrationSuccessMessage']; unset($_SESSION['registrationSuccessMessage']); ?>
                </div>
            <?php endif; ?>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <img src="image/logotext.png" alt="Image" class="logotext">
                    <img src="image/logotext.png" alt="Image" class="logotexts">
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
	</div>
	<div class="footer">
    <p>&copy; © 2023 Pokémon GO</p>
</div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.querySelector('.container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
		
    </script>
	

</body>
</html>
