<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    //$password = $_POST['password'];
   // $number = $_POST['number'];

    // Database connection
    $conn = new mysqli('localhost','root','','homato');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into contactus(name, email, phone, message) values(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $phone, $message);
        $execval = $stmt->execute();
        echo $execval;
       // echo "Registration successfully...";
        header('location:index.html');
        $stmt->close();
        $conn->close();
    }
?>
