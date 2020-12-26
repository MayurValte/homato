<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    //$password = $_POST['password'];
   // $number = $_POST['number'];

    // Database connection
    $conn = new mysqli('localhost','root','','homato');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into seller(name, email, phone, location, message) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $name, $email, $phone, $location, $message);
        $execval = $stmt->execute();
       // echo $execval;
       // echo "Registration successfully...";
header('location:index.html');
        //swal("Good job!", "Successfully Submited!", "success");

        $stmt->close();
        $conn->close();
    }
?>