<?php	
	session_start();
	error_reporting(0);
	
	echo $_SESSION['uname'];
	$username = $_SESSION['uname'];
	echo $username;	
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-widthaa, initial-scale=1">
		<title>About Pokémon GO </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Modak&family=Noto+Music&family=Varela+Round&display=swap" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<!-- FONT -->
		
		
		
		<!-- /FONT -->
	</head>
		<style>
			*{
				box-sizing: border-box;
			}
			
			.row{
				display: flex;
			}
			
			.column {
			  flex: 50%;
			  padding: 10px;			  
			}
			
			body {			
				margin: auto;
				position: relative;
				font-family: 'Varela Round', sans-serif;
				overflow: auto;
				background: #060020;
				animation: gradient 15s ease infinite;
				background-size: 100% 100%;
				background-attachment: fixed;
			}
						 

			#navbar {
				background-color: #b5b090;
				position: sticky;
				top: 0;
				z-index: 100;
			}
 .nav-link1 {
            font-size: 25px;
            font-family: 'Varela Round', sans-serif;
            font-weight: bold;
            color: white;
        
            margin-left: 23px;
            background-color:#473f2e;
        }
		
			.nav-link {
            font-size: 25px;
            font-family: 'Varela Round', sans-serif;
            color: white;
			}
   #navbar {
        background-color: #060020;
        position: fixed; /* Change to "fixed" */
        top: 0;
        left: 0; /* Add this line */
        right: 0; /* Add this line */
        z-index: 100;
        border-bottom: 3px solid white; /* Add this line */
    }

        .nav-link {
            font-size: 25px;
            font-family: 'Varela Round', sans-serif;
            color: white;
        }

        #navbar1 {
            background-color: #595024;
            height: 45px;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: white;
            background-color: #F1C40F;
            text-decoration: none;
        }

        .nav-link:active {
            outline: none;
            color: inherit;
        }

			  .button {
            display: inline-block;
            padding: 10px 20px;
            margin-left: 10px;
            font-size: 20px;
            font-family: 'Varela Round', sans-serif;
            text-decoration: none;
            text-align: center;
            color: white;
            background-color: #0000FF;
            border-radius: 20px;
            transition: background-color 0.3s;
        }


		.button1 {
            display: inline-block;
            padding: 10px 20px;
            margin-left: 10px;
            font-size: 20px;
            font-family: 'Varela Round', sans-serif;
            text-decoration: none;
            text-align: center;
            color: white;
            background-color: #b3ab89;
            border-radius: 20px;
            transition: background-color 0.3s;
        }
			.button-brown:hover {
				background: #F1C40F;
			}
			
			/* Added CSS for the image overlay */
			.image-overlay {
				position: relative;
				height: 600px; /* Adjust the height as desired */
			}
			
			.image-overlay img {
				object-fit: cover;
				width: 100%;
				height: 100%;
			}
			
			.image-overlay .overlay {
				position: absolute;
				bottom: 0;
				left: 0;
				right: 0;
				padding: 250px;
				padding-top: 295px;
				background-color: rgba(91, 81, 38, 0.7); /* Adjust the overlay background color and transparency */
				color: white;
				font-size: 40px;
			}
			
		
			footer {
				color: white;
				font-family: 'Varela Round', sans-serif;
				font-size: 20px;
			}

			footer h4 {
				font-size: 24px;
				font-weight: bold;
				margin-bottom: 10px;
			}

			footer p {
				margin-bottom: 5px;
			}

			footer a {
				color: white;
			}

			footer a:hover {
				color: #F1C40F;
			}

			footer .list-inline {
				margin-top: 10px;
				padding-left: 0;
			}

			footer .list-inline-item {
				margin-right: 10px;
				font-size: 24px;
			}

			.containerfoot {
				background-color: white;
			}

			.text-white {
				color: white;
			}
			@keyframes gradient {
				0% {
					background-position: 0% 0%;
				}
				50% {
					background-position: 100% 100%;
				}
				100% {
					background-position: 0% 0%;
				}
			}

			.wave {
				background: rgb(255 255 255 / 25%);
				border-radius: 1000% 1000% 0 0;
				position: fixed;
				width: 200%;
				height: 12em;
				animation: wave 10s -3s linear infinite;
				transform: translate3d(0, 0, 0);
				opacity: 0.8;
				bottom: 0;
				left: 0;
				z-index: -1;
			}

			.wave:nth-of-type(2) {
				bottom: -1.25em;
				animation: wave 18s linear reverse infinite;
				opacity: 0.8;
			}

			.wave:nth-of-type(3) {
				bottom: -2.5em;
				animation: wave 20s -1s reverse infinite;
				opacity: 0.9;
			}

			@keyframes wave {
				2% {
					transform: translateX(1);
				}

				25% {
					transform: translateX(-25%);
				}

				50% {
					transform: translateX(-50%);
				}

				75% {
					transform: translateX(-25%);
				}

				100% {
					transform: translateX(1);
				}
			}
			
			.center-text{
				display: flex;
			   justify-content: center;
			   align-items: center;
			   height: 50vh;
			}


.box {
        width: 600px;
        height: 450px;
        overflow: hidden;
        border: 5px solid white;
        background-color: ; /* Add background color for the image box */
    }

    .info-box {
        background-color: #5e562b;
        padding: 30px;
        border-radius: 10px;
        margin-top: 20px;
		margin-bottom: 20px;
    border: 5px solid #4a4010;
    }

    .box img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Maintains the aspect ratio of the image within the fixed dimensions */
        transition: transform 0.3s ease;
    }

    .box:hover img {
        transform: scale(1.1);
    }
	
	.button-brown a {
    color: inherit;
    text-decoration: none;
  }
  
  .image-text-container3 {
    display: ;
    align-items: center;
    justify-content: left;
    padding: 50px;
    background-color: white;
    width: 1300px;
    margin: 0 auto;
}

.image-text-container3 img {
            width: 300px;
            height: 300px;
            margin-right: 55px;
            margin-top: 70px;
            border-radius: 100%;
            transition: transform 0.3s;
        }

        .image-text-container3 img:hover {
    transform: scale(1.2);
    margin-right: 0; /* Adjust the margin-right value */
    margin-top: 0; /* Adjust the margin-top value */
}
.image-text-container3 h1 {
    color: white;
    font-weight: bold;
    margin: 0;
    margin-left: 50px; /* Adjusted margin-left value */
}

.image-text-container3 p {
    font-size: 24px;
    color: white;
    font-weight: bold;
    margin: 0;
    margin-left: 50px; /* Adjusted margin-left value */
}

 .reveal {
            position: relative;
            transform: translateY(150px);
            opacity: 0;
            transition: 2s all ease;
        }

        .reveal.active {
            transform: translateY(0);
            opacity: 1;
        }
         .reveal {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .reveal.active {
            opacity: 1;
        }
		</style>
	<body>
		<script>
   function reveal() {
      var reveals = document.querySelectorAll(".reveal");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }

    // Trigger reveal function on page load
    window.addEventListener("load", reveal);
  </script>		
	 <nav class="py-2" id="navbar">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="home.php" class="nav-link px-4">HOME</a></li>
            <li class="nav-item"><a href="marketplace.php" class="nav-link px-4">MARKETPLACE</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link px-4">ABOUT</a></li>
        </ul>
        <!-- PLS EDIT DIS AND COPY PASTE TO THE OTHER WEBPAGES -->
       <?php
    if (empty($_SESSION['uname'])) {
        echo "<div class='button button-brown'><a href='Form.php'>Login</a></div>
        <div class='button button-brown'><a href='Form.php'>Sign up</a></div>";
    } else {
        echo "<div class='button button-brown'><a href='Form.php'>Logout</a></div>
            <div class='button button-brown'><a href='bookings.php'>Bookings</a></div>
            <ul class='nav'> <!-- Added 'nav' class to the list -->
                <li class='nav-item'>
                    <h2 class='nav-link1'>Hello, $username!</h2>
                </li>
            </ul>";
    }
?>

</nav>
				
			
	
		<div class = "container" style="padding-top: 200px;">	
		
			<div class="container text-center">
				<div class = "reveal">
				  <div class="row"  style = "background-color: white ; color: black; padding: 20px;" >
					<div class="col">
					<div class="box">
					  <img src = "https://lh3.googleusercontent.com/RGShDyVofSODXIJ0eQ9umAID8tCw9KdqBFrtgCEdrxjJijG1qZBryfECP9IRV1MOJhCk4Za4VYB34DE-hnPesZNNVYMwgHKs9KrNue3LNJRJuw=e365-w1920" alt = "image" width = "100%">
					  </div>
					  
					</div>
					<div class="col">						
						<div class = "center-text">
							<center><h3 style="font-size: 50px; font-weight: bold;  color:black;">About Pokémon GO</h3>
							<p style="text-align: justify; font-size:20px;">Pokémon GO is an augmented reality mobile game developed and published by Niantic along with Nintendo and The Pokemon Company.
						It is available in iOS and Android devices and utilizes GPS to locate and interact Pokémons by capturing, training, or battling them. </p>
				
						</div>
					</div>				
				</div>

<br><b>Twitter:</b> @PokemonGoApp
<br><b>Instagram:</b> pokemongoapp
<br><b>Facebook:</b> Pokémon GO</p>
						
							</div>
						</div>						
				</div>
			  <div></div>
				<br><br><br>
				
						
					</div>
				</div>			  
			</div>
			
			
			
			
	<center>

<section class="image-text-container3">
  <h2 style="text-align: center;font-family: 'Varela Round', sans-serif; color:black; font-weight: bold; font-size: 50px;">Members</h2>
  <div style="display: flex; align-items: center; justify-content: center;">
    <img src="https://scontent.fmnl17-3.fna.fbcdn.net/v/t39.30808-6/276323795_3146750845652780_3943818666722479927_n.jpg?_nc_cat=110&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHvizkoacadUA3fRO3ch5SJam_fqtKAgcJqb9-q0oCBwu6D68Eh46ahuLSsJjLTwgVLSCRRUeTehEttfUX-mGcn&_nc_ohc=EduwFtSJ8QcAX96lnD7&_nc_ht=scontent.fmnl17-3.fna&oh=00_AfBnnQgP3o_pKBnudxIAGgAFOx5WC3tPqCIiKl7E3nyPpg&oe=64B5BAA1" alt="Image" style="width: 250px; height: 250px; margin-right: 80px; margin-top:50px; margin-bottom:50px; margin-left: 80px; border-radius: 100%;">
    <img src="https://scontent.fmnl17-1.fna.fbcdn.net/v/t31.18172-8/19238283_1855113961415395_8602183481295938145_o.jpg?_nc_cat=108&cb=99be929b-3346023f&ccb=1-7&_nc_sid=174925&_nc_eui2=AeHT-4u1vLebYmGQpkVw6QQDdIJTwcRz9zJ0glPBxHP3MjLF4g-aGHDCzKljv4BmHj7il57Kulq42-GAp-z5c4Fi&_nc_ohc=eHago5DMV0EAX8WYhrb&_nc_ht=scontent.fmnl17-1.fna&oh=00_AfC9tK7T-pvtyLHPAUUvUbjs4m0BSOjfQr3t83jDT5UZHw&oe=64D919A1" alt="Image" style="width: 250px; height: 250px; margin-right: 80px; margin-top:50px; margin-bottom:50px; border-radius: 100%;">
    <img src="https://scontent-hkg4-1.xx.fbcdn.net/v/t1.15752-9/356548858_653968283291520_7779735136979183627_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeEJmR1qvt0kOxcc9AeBCO83M6pTqWPWi8szqlOpY9aLy90cpwDa1VwkicQm1vyi0OUXjrhgOrdR3Tf1Q0a5blBD&_nc_ohc=6Jhc4pXlwEgAX_PusHR&_nc_ht=scontent-hkg4-1.xx&oh=03_AdSlNzHoUiwtoLuOlIOMzbITFOLbosLZg_cS-Gd-QDPy_Q&oe=64D9AB7A" alt="Image" style="width: 250px; height: 250px; margin-right: 80px; margin-top:50px; margin-bottom:50px; border-radius: 100%;">
  </div>
</section>

			
			<div class="wave"></div>
			<div class="wave"></div>
			<div class="wave"></div>
		</div>
			
		</div>
		</div>
		<br><br><br><br><br><br><br><br>
		<div class="containerfoot">
		<footer class="py-4 my-6">
			<ul class="nav justify-content-center border-bottom pb-3 mb-3">
			  <li class="nav-item"><a href="home.php" class="nav-link px-2 text-black">Home</a></li>
			  <li class="nav-item"><a href="marketplace.php" class="nav-link px-2 text-black">Marketplace</a></li>
			  <li class="nav-item"><a href="about.php" class="nav-link px-2 text-black">About</a></li>
			</ul>
			<p class="text-center text-black">© 2023 Pokémon GO</p>
		  </footer>
		</div>
	</body>
</html>