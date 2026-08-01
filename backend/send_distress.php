<?php
session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../index.php");
	exit();
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
	$message = trim($_POST['message'] ?? '');

	if(!empty($message)) {
		include_once "connect.php";

		$con->query("CREATE TABLE IF NOT EXISTS `distress_messages` (
			`id` INT AUTO_INCREMENT PRIMARY KEY,
			`username` VARCHAR(255) NOT NULL,
			`message` TEXT NOT NULL,
			`sent_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)");

		$stmt = $con->prepare("INSERT INTO `distress_messages` (`username`, `message`) VALUES (?, ?)");
		$stmt->bind_param("ss", $_SESSION['username'], $message);

		if($stmt->execute()) {
			echo "<script>
					alert('Distress message sent successfully.');
					window.location.href='../pre_disaster.php';
				  </script>";
		} else {
			echo "<script>
					alert('Failed to send message. Please try again.');
					window.location.href='../pre_disaster.php';
				  </script>";
		}
		$stmt->close();
	} else {
		echo "<script>
				alert('Please enter a distress message.');
				window.location.href='../pre_disaster.php';
			  </script>";
	}
} else {
	header("Location: ../pre_disaster.php");
	exit();
}
?>
