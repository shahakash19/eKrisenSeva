<?php
if(isset($_POST['sheltername']) && isset($_POST['shelteraddress']) &&
   isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['facility']) &&
   isset($_POST['official-add']) && isset($_POST['capacity-add'])) {

	$sheltername    = $_POST['sheltername'];
	$shelteraddress = $_POST['shelteraddress'];
	$latitude       = (float)$_POST['latitude'];
	$longitude      = (float)$_POST['longitude'];
	$facility       = $_POST['facility'];
	$official_add   = $_POST['official-add'];
	$capacity_add   = (int)$_POST['capacity-add'];

	if(!empty($sheltername) && !empty($shelteraddress) && !empty($latitude) &&
	   !empty($longitude) && !empty($facility) && !empty($official_add) && !empty($capacity_add)) {
		include "connect.php";

		$chk = '';
		foreach($facility as $chk1) {
			$chk .= $chk1.",";
		}

		$stmt = $con->prepare("INSERT INTO `shelter` (`name`, `address`, `latitude`, `longitude`, `facilities`, `official`, `capacity`, `date`) VALUES (?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$stmt->bind_param("ssddssi", $sheltername, $shelteraddress, $latitude, $longitude, $chk, $official_add, $capacity_add);

		if($stmt->execute()) {
			echo "<script>
					alert('Shelter added successfully.');
					window.location.href='../pre_disaster.php';
				  </script>";
		} else {
			echo "<script>
					alert('Failed to add shelter. Please try again.');
					window.location.href='../error.php';
				  </script>";
		}
		$stmt->close();
	} else {
		echo "<script>alert('Please enter all required values.');</script>";
		echo "<script>window.location='../pre_disaster.php';</script>";
	}
} else {
	echo "<script>
			alert('Error: Missing required fields.');
			window.location.href='../error.php';
		  </script>";
}
?>
