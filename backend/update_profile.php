<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
	exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	include "connect.php";

	$fname = trim($_POST['fname'] ?? '');
	$lname = trim($_POST['lname'] ?? '');

	if(!empty($fname) && !empty($lname)) {
		$stmt = $con->prepare("UPDATE `users` SET `fname` = ?, `lname` = ? WHERE `username` = ?");
		$stmt->bind_param("sss", $fname, $lname, $_SESSION['username']);

		if($stmt->execute()) {
			echo "<script>
					alert('Profile updated successfully.');
					window.location.href='../profile.php';
				  </script>";
		} else {
			echo "<script>
					alert('Failed to update profile.');
					window.location.href='../profile.php';
				  </script>";
		}
		$stmt->close();
	} else {
		echo "<script>
				alert('First name and last name are required.');
				window.location.href='../profile.php';
			  </script>";
	}
} else {
	header("Location: ../profile.php");
	exit();
}
?>
