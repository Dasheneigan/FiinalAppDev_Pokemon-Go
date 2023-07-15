<?php	
	session_start();
	error_reporting(0);
	
    if(isset($_SESSION["uname"]))
	    $username = $_SESSION['uname'];
    else 
    header("Location: Form.php");

?>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokémon GO Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <style>
        body {
            position: relative;
            margin: auto;
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            overflow: auto;
            background: #060020;
            animation: gradient 15s ease infinite;
            background-size: 400% 400%;
            background-attachment: fixed;
        }

        .booking_ocline {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .book_room {
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-top: 0;
        }

        .book_now {
            margin-top: 40px;
        }

        span {
            display: block;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: left;
        }

        .form-check {
            display: inline-block;
            margin-right: 20px;
        }

        .online_book {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        .book_btn {
            background-color: #4a4010;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        .book_btn:hover {
            background-color: #F1C40F;
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
            background-color: #F1C40F;
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

.nav-link1 {
            font-size: 25px;
            font-family: 'Varela Round', sans-serif;
            font-weight: bold;
            color: white;
            margin-left: 23px;
            background-color:#473f2e;
        }
        .button-brown:hover {
            background-color: #F1C40F;
        }

        /* Added font styles */
        h1,
        p {
            font-family: 'Varela Round', sans-serif;
        }

        .nav-item p {
            font-family: 'Varela Round', sans-serif;
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
            height: 5em;
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

        .dropdown-item.dropdown-link {
            padding: 0.5rem 1rem;
            font-size: 1rem;
            color: white;
            background-color: #b5b090;
            border: none;
            transition: background-color 0.2s;
            font-family: 'Varela Round', sans-serif;
            background-size: 200%;
        }

        .dropdown-item.dropdown-link:hover {
            background-color: #F1C40F;
            color: #fff;
        }

        .dropdown-item.dropdown-link:focus,
        .dropdown-item.dropdown-link.focus {
            background-color: #343a40;
            color: #fff;
        }

        .reveal {
            opacity: 0;
            transition: opacity 0.5s;
        }

        .reveal.active {
            opacity: 1;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: -1;
        }
		
		.pad{
		padding-top: 150px;
		}
		
	
	.box {
        width: 100%;
        height: 300px;
        overflow: hidden;
        border: 5px solid white;
    }

    .info-box {
        padding: 30px;
        border-radius: 10px;
        margin-top: 20px;
		margin-bottom: 20px;
        border: 5px solid #0000FF;
    }

    .box img {
        width: 100%;
        height: 100%;
        object-fit: scale-down; /* Maintains the aspect ratio of the image within the fixed dimensions */
        transition: transform 0.3s ease;
    }

    .box:hover img {
        transform: scale(1.1);
    }
	
footer {
    color: white;
    font-family: 'Varela Round', sans-serif;
    font-size: 20px;
	margin-top: 250px;
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
    background-color: #F1C40F;
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
	
		.button-brown a {
    color: inherit;
    text-decoration: none;
  }
  
  .button1 {
            display: inline-block;
            padding: 10px 20px;
            font-size: 20px;
            font-family: 'Varela Round', sans-serif;
            text-decoration: none;
            text-align: center;
            color: white;
            background-color: #b3ab89;
            border-radius: 20px;
            transition: background-color 0.3s;
        }



    .li-Itemname {
        background-color: #e1be00;
    }

    .li-Itemprice {
        background-color: #e1be00;
    }

    .li-Itemquantity {
        background-color: #e1be00;
    }
    </style>

    <!-- Font styles link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Modak&family=Noto+Music&family=Varela+Round&display=swap" rel="stylesheet">
</head>

<body>


   <nav class="py-2" id="navbar">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="home.php" class="nav-link px-4">HOME</a></li>
            <li class="nav-item"><a href="marketplace.php" class="nav-link px-4">MARKETPLACE</a></li>
            <li class="nav-item"><a href="dining.php" class="nav-link px-4">DINING</a></li>
            <li class="nav-item"><a href="events.php" class="nav-link px-4">EVENTS</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link px-4 dropdown-toggle" href="#" id="amenitiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AMENITIES</a>
                <ul class="dropdown-menu" aria-labelledby="amenitiesDropdown">
                    <li><a class="dropdown-item dropdown-link" href="pool.php">POOL</a></li>
                    <li><a class="dropdown-item dropdown-link" href="gym.php">GYM</a></li>
                </ul>
            </li>
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

	<div class="reveal">
	<div class="pad">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <img src="https://store.pokemongolive.com/_next/image?url=https%3A%2F%2Fcdn3.xsolla.com%2Fimg%2Fmisc%2Fimages%2F070822898eca123f2f2dd9f1759f9734.png&w=128&q=75" alt="Box 1">
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img src="https://store.pokemongolive.com/_next/image?url=https%3A%2F%2Fcdn3.xsolla.com%2Fimg%2Fmisc%2Fimages%2F28042bf667a908f5761e677f1cb62f1f.png&w=128&q=75" alt="Box 2">
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img src="https://store.pokemongolive.com/_next/image?url=https%3A%2F%2Fcdn3.xsolla.com%2Fimg%2Fmisc%2Fimages%2Fdb583406b118ae8d86b525add9a4132d.png&w=128&q=75" alt="Box 3">
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col">
                <div class="info-box" style="background-color: #000080;">
                    <h3 style="color:#000000; font-size: 40px; font-family: 'Varela Round', sans-serif; font-weight: bold;">600 PokéCoins</h3>
					<h3 style="color:white; font-size: 30px; font-family: 'Varela Round', sans-serif; font-weight: bold;">PHP 249.00</h3>

					<form method = "POST">
                        <input type = hidden id = "product_id" name = "product_id" value = "1">
                        <input type = hidden id = "quantity" name = "quantity" value = "1">
                        <input class="button1 button-brown" style="background-color: #0000FF;" type="submit" id = "submit" value = "Buy">
                    </form>

                </div>
            </div>
            <div class="col">
                <div class="info-box" style="background-color: #000080;">
                    <h3 style="color:#000000; font-size: 40px; font-family: 'Varela Round', sans-serif; font-weight: bold;">1300 PokéCoins</h3>
					<h3 style="color:white; font-size: 30px; font-family: 'Varela Round', sans-serif; font-weight: bold;">PHP 499.00</h3>
					
                    <form method = "POST">
                        <input type = hidden id = "product_id" name = "product_id" value = "2">
                        <input type = hidden id = "quantity" name = "quantity" value = "1">
                        <input class="button1 button-brown" style="background-color: #0000FF;" type="submit" id = "submit" value = "Buy">
                    </form>

                </div>
            </div>
            <div class="col">
                <div class="info-box" style="background-color: #000080;">
                    <h3 style="color:#000000; font-size: 40px; font-family: 'Varela Round', sans-serif; font-weight: bold;">2700 PokéCoins</h3>
					<h3 style="color:white; font-size: 30px; font-family: 'Varela Round', sans-serif; font-weight: bold;">PHP 999</h3>
					
                    <form method = "POST">
                        <input type = hidden id = "product_id" name = "product_id" value = "3">
                        <input type = hidden id = "quantity" name = "quantity" value = "1">
                        <input class="button1 button-brown" style="background-color: #0000FF;" type="submit" id = "submit" value = "Buy">
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <div class="container pad">
        <div class="row">
            <div class="col">
                <div class="box">
                    <img src="https://store.pokemongolive.com/_next/image?url=https%3A%2F%2Fcdn3.xsolla.com%2Fimg%2Fmisc%2Fimages%2F8cabb613cc3703e052629e0bc7eec1af.png&w=128&q=75" alt="Box 4">
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img src="https://store.pokemongolive.com/_next/image?url=https%3A%2F%2Fcdn3.xsolla.com%2Fimg%2Fmisc%2Fimages%2F7ca5a8f30cbcf9ab08548b391a425e06.png&w=128&q=75" alt="Box 5">
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col">
                <div class="info-box" style="background-color: #000080;">
                    <h3 style="color:#000000; font-size: 40px; font-family: 'Varela Round', sans-serif; font-weight: bold;">5600 PokéCoins</h3>
					<h3 style="color:white; font-size: 30px; font-family: 'Varela Round', sans-serif; font-weight: bold;">PHP 1990.00</h3>

                    <form method = "POST">
                        <input type = hidden id = "product_id" name = "product_id" value = "4">
                        <input type = hidden id = "quantity" name = "quantity" value = "1">
                        <input class="button1 button-brown" style="background-color: #0000FF;" type="submit" id = "submit" value = "Buy">
                    </form>

                </div>
            </div>
            <div class="col">
                <div class="info-box" style="background-color: #000080;">
                    <h3 style="color:#000000; font-size: 40px; font-family: 'Varela Round', sans-serif; font-weight: bold;">15500 PokéCoins</h3>
					<h3 style="color:white; font-size: 30px; font-family: 'Varela Round', sans-serif; font-weight: bold;">PHP 4990.00</h3>
					
                    <form method = "POST">
                        <input type = hidden id = "product_id" name = "product_id" value = "5">
                        <input type = hidden id = "quantity" name = "quantity" value = "1">
                        <input class="button1 button-brown" style="background-color: #0000FF;" type="submit" id = "submit" value = "Buy">
                    </form>

                </div>
            </div>
        </div>
    </div>

<?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "cart";

            // Connect to the database
            $conn = new mysqli($host, $user, $pass, $db);
        
            // Check connection if successful
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //check of existence

            $product_id = $_POST["product_id"];
            $quantity = $_POST["quantity"];
            
            $sql = "SELECT * FROM orders WHERE username = '$username' ";
            $records = $conn->query($sql);

            $boolExisting = false;

            if ($records->num_rows > 0) {
                while($record = $records->fetch_assoc()) {
                    if ($record["username"] == $username && $_POST["product_id"] == $record["product_id"])
                    {
                        $boolExisting = true;
                        $sql = "UPDATE orders SET quantity = quantity+1 WHERE username = '$username' AND product_id = '$product_id' ";
                        $updatequantity = $conn->prepare($sql);
                        $updatequantity->execute();
                        $updatequantity->close();
                        break;
                    }
                }

            }else {
                $records = array(); // $records = [];
            }

            //adding to cart
            if (!$boolExisting) {

            $sql = "INSERT INTO orders (username, product_id, quantity) VALUES (?, ?, ?)";

            $tocart = $conn->prepare($sql);
            $tocart -> bind_param("sss", $username, $product_id, $quantity);

            $tocart->execute();
            $tocart->close();
            }
        }
?>


<div class = "container pad">
    <form method="">
        <div class = "row">
            <div class="col-4 li-Itemname"> Item Name</div>
            <div class="col-4 li-Itemprice"> Item Price</div>
            <div class="col-4 li-Itemquantity"> Item Quantity</div>
        </div>
        
        <?php 
        
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "cart";
        
        // Connect to the database
        $conn = new mysqli($host, $user, $pass, $db);
        
        // Check connection if successful
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        //check of existence
        $sql = "SELECT * FROM orders WHERE username = '$username' ";
        $records = $conn->query($sql);

        $increment = 0;
        
        
        if ($records->num_rows > 0) {
            while($record = $records->fetch_assoc()) { 
                
                $increment++;
                $product_id = $record["product_id"];
                $sql = "SELECT * FROM products WHERE product_id = '$product_id' ";
                $fetch_product = $conn->query($sql);
                $product = $fetch_product->fetch_assoc();
                ?>
        
        <div class = "row">
        <div class="col-4 li-Itemname"> <?= $product["itemname"]?></div>
        <div class="col-4 li-Itemprice"> <?= $product["price"]?></div>

        <input type = number name= <?=$record["orderid"] ?> class="col-4 li-Itemquantity" value = <?=$record["quantity"]?>>
    
</div>

<?php
        }
    }

else {
    $records = array(); // $records = [];
}
?>
    <div class = "row"> 
        <input class ="btn btn-info" id = "submit" type = submit value = submit>
    </div>

</form method="">
        
        
    
</div>


	</div>
</div>

<div>
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>



	
<div class="containerfoot">
    <footer class="py-4 my-6">    
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="home.php" class="nav-link px-2 text-black">Home</a></li>
      <li class="nav-item"><a href="marketplace.php" class="nav-link px-2 text-black">Marketplace</a></li>
      <li class="nav-item"><a href="dining.php" class="nav-link px-2 text-black">Dining</a></li>
	  <li class="nav-item"><a href="events.php" class="nav-link px-2 text-black">Events</a></li>
      <li class="nav-item"><a href="about.php" class="nav-link px-2 text-black">About</a></li>
    </ul>
    <p class="text-center text-black">© 2023 Pokémon GO</p>
  </footer>
</div>




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
</body>
</html>