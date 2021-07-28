<?php 
	require '../helpers/config.php';

	$email = $_POST['Email'];
	$password = $_POST['Password'];
	$user_query = "SELECT * FROM users WHERE email = '$email' AND password = '$password' ";
	$mysqli_result = mysqli_query($conn, $user_query) or die(mysqli_error($conn));

	if(mysqli_num_rows($mysqli_result) == 0) {
		header('location: ../views/login.php');	 
	} else {
		$row = mysqli_fetch_array($mysqli_result);
		session_start();
		$_SESSION['id'] = $row['id'];
		$_SESSION['email'] = $row['email'];
		header('location: ../views/products.php');
 	} 
?>