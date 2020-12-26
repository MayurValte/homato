
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
$username="root";
$password="";
$server='localhost';
$db='homato';
$con=mysqli_connect($server,$username,$password,$db);
if ($con) {
	?>
	<script>swal("Good job!", "Successfully Submited!", "success");</script>
	<?php

}else{
	die("no connection".mysql_connect_error());
}
?>
</body>
</html>