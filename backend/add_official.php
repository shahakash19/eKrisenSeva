<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
	exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name    = trim($_POST['name'] ?? '');
	$email   = trim($_POST['email'] ?? '');
	$contact = trim($_POST['contact'] ?? '');

	if(!empty($name) && !empty($contact)) {
		include_once "connect.php";

		$stmt = $con->prepare("INSERT INTO `official` (`name`, `email`, `contact`) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $contact);

		if($stmt->execute()) {
			echo "<script>
					alert('Official added successfully.');
					window.location.href='../pre_disaster.php';
				  </script>";
		} else {
			echo "<script>
					alert('Failed to add official. Please try again.');
					window.location.href='../pre_disaster.php';
				  </script>";
		}
		$stmt->close();
	} else {
		echo "<script>
				alert('Name and contact number are required.');
				window.location.href='../pre_disaster.php';
			  </script>";
	}
} else {
	header("Location: ../pre_disaster.php");
	exit();
}
?>
