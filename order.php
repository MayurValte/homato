
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homato We serve homemade foods</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.jpg" alt="Homato.com">
        </div>
        <ul>
             <li class="item"><a href="index.html">Home</a></li>
            <li class="item"><a href="aboutus.php">About Us</a></li>
            <li class="item"><a href="client.php">Our Clients</a></li>
            <li class="item"><a href="contactus.php">Contact Us</a></li>
             <li class="item"><a href="seller.php">Seller</a></li>
        </ul>
    </nav>

			<?php
			include 'connection.php';
			$selectquery="select * from seller";
			$query=mysqli_query($con,$selectquery);
			$nums=mysqli_num_rows($query);
			while ($res=mysqli_fetch_array($query)) {
				?>


				<h1 class="h-primary center"></h1>
         <div id="seller">
             <div class="box">
            <!-- Displaying Data From Database -->
                <p>No:   <?php echo $res['id']; ?></p><br>
               <p>Name: </p> <?php echo $res['name']; ?><br>
               <p>Email: </p> <?php echo $res['email']; ?><br>
               <p>Mobile No: </p> <?php echo $res['phone']; ?><br>
               <p>Address: </p> <?php echo $res['location']; ?><br>
               <p>Message: </p> <?php echo $res['message']; ?><br>
                <h2 class="h-secondary center"></h2>
            </div>
        </div>



			<?php
			}
			?>
           <br>
           <br>
           <br>

            <footer>
        <div class="center">
            Copyright &copy; www.Homato.com. All rights reserved!
        </div>
    </footer>
</body>
</html>