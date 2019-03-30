<?php
function showDetails($conn)
{
	$sql = "SELECT * FROM shelter";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "
	        	<tr>
					<td>" .$row['id'] ."</td>
					<td>" .$row['name'] ."</td>
					<td>" .$row['address'] ."</td>                                 
														
					<td><span class='label label-danger'>" .getContact($conn, $row['official']) ."</span></td>
					<td><span class='badge badge-info'>" .$row['capacity'] ."</span></td>
				</tr>";
	    }
	} else {
	    echo "<script>
	            alert('Error Loading Details');
	          </script>";
	}
}

function getContact($connection, $name)
{
	$sql = "SELECT * FROM `official` where `name` = '$name'";
	$result = $connection->query($sql);
	
	if ($result->num_rows > 0) {
	    // output data of each row
	    $row = $result->fetch_assoc();
	    return $row["contact"];
	}
	else
	{
		return "Error";
	}
}
?>