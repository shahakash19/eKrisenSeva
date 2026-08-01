<?php
if(isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["password"]) && isset($_POST["confirm-password"])) {
	if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["password"]) && !empty($_POST["confirm-password"])) {
		include "connect.php";

		$firstname        = $_POST['firstname'];
		$lastname         = $_POST['lastname'];
		$email            = $_POST['email'];
		$gender           = (int)$_POST['gender'];
		$password         = $_POST['password'];
		$confirm_password = $_POST['confirm-password'];

		if($password !== $confirm_password) {
			echo "<script>
					alert('Password Mismatch.');
					window.location.href='../signup.php';
				  </script>";
			exit();
		}

		$password_hash = password_hash($password, PASSWORD_DEFAULT);

		$stmt = $con->prepare("INSERT INTO `users` (`username`, `password`, `fname`, `lname`, `gender`, `last_log`) VALUES (?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$stmt->bind_param("ssssi", $email, $password_hash, $firstname, $lastname, $gender);

		if($stmt->execute()) {
			session_start();
			$_SESSION["username"] = $email;
			echo "<script>
					alert('Account created successfully.');
					window.location.href='../pre_disaster.php';
				  </script>";
		} else {
			echo "<script>
					alert('Registration failed. Please try again.');
					window.location.href='../signup.php';
				  </script>";
		}
		$stmt->close();
	} else {
		echo "<script>
				alert('Please fill in all fields.');
				window.location.href='../signup.php';
			  </script>";
	}
}
?>
