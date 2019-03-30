<?php
	
	if(	isset($_POST['sheltername']) && isset($_POST['shelteraddress']) &&
		isset($_POST['latitude']) && isset($_POST['longitude']) && isset($_POST['facility']) &&
		isset($_POST['official-add']) && isset($_POST['capacity-add'])
	)
	{
		$sheltername = $_POST['sheltername'];
		$shelteraddress = $_POST['shelteraddress'];
		$latitude = $_POST['latitude'];
		$longitude = $_POST['longitude'];
		$facility = $_POST['facility'];
		$official_add = $_POST['official-add'];
		$capacity_add = $_POST['capacity-add'];


		//$password_hash=md5($password);
		if(	!empty($sheltername) && !empty($shelteraddress) && !empty($latitude) && !empty($facility) &&
			!empty($longitude) && !empty($official_add) && !empty($capacity_add)
		)
		{
			include "connect.php";
			
			foreach($facility as $chk1)  
   			{  
      			$chk .= $chk1.",";  
   			}

			$query= "INSERT INTO `shelter` (`name`, `address`, `latitude`, `longitude`, `facilities`, `official`, `capacity`, `date`) VALUES ('$sheltername', '$shelteraddress', $latitude, $longitude, '$chk' , '$official_add', $capacity_add, CURRENT_TIMESTAMP)";
			
			if(mysqli_query($con,$query))
            {
                echo "<script>
                        alert('User Created.');
                        window.location.href='../pre_disaster.php';
                      </script>";
            }
            else
            {
                echo "<script>
                        alert('Query Error');
                        window.location.href='../error.php';
                      </script>";
            }
		}
		else
		{
			echo "<script>alert('Enter Correct values.');</script>";
			echo "<script>window.location='../index.php';</script>";
		}
	}
	else
    {
        echo "<script>
                alert('Error');
                window.location.href='../error.php';
              </script>";
    }
?>