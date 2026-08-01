<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if(!empty($username) && !empty($password)) {
		include "connect.php";

		$stmt = $con->prepare("SELECT * FROM `users` WHERE `username` = ?");
		$stmt->bind_param("s", $username);
		$stmt->execute();
		$result = $stmt->get_result();

		if($result->num_rows == 0) {
			echo "<script>alert('Invalid Username or Password');</script>";
			echo "<script>window.location='../index.php';</script>";
		} else {
			$user = $result->fetch_assoc();
			if(password_verify($password, $user['password'])) {
				session_start();
				$_SESSION["username"] = $user["username"];
				header("Location:../pre_disaster.php");
			} else {
				echo "<script>alert('Invalid Username or Password');</script>";
				echo "<script>window.location='../index.php';</script>";
			}
		}
		$stmt->close();
	} else {
		echo "<script>alert('Please enter your username and password.');</script>";
		echo "<script>window.location='../index.php';</script>";
	}
}
?>
