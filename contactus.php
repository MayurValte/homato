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
</script>
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

       <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <p>Contact us to show Your buisness details on our website...</p>
        <div id="contact-box">
            <form action="insert.php" method="POST">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                     <input class=btn type="submit" name="submit" value="Submit" id="submit">
                    
                </div>
            </form>
        </div>
    </section>
      <footer>
        <div class="center">
            Copyright &copy; www.Homato.com. All rights reserved!
        </div>
    </footer>
</body>

</html>