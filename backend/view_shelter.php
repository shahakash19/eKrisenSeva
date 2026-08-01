<?php
function showDetails($conn) {
	$sql    = "SELECT * FROM shelter";
	$result = $conn->query($sql);

	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "
			<tr>
				<td>" . htmlspecialchars($row['id']) . "</td>
				<td>" . htmlspecialchars($row['name']) . "</td>
				<td>" . htmlspecialchars($row['address']) . "</td>
				<td><span class='label label-danger'>" . getContact($conn, $row['official']) . "</span></td>
				<td><span class='badge badge-info'>" . htmlspecialchars($row['capacity']) . "</span></td>
			</tr>";
		}
	} else {
		echo "<tr><td colspan='5'>No shelters found.</td></tr>";
	}
}

function getContact($connection, $name) {
	$stmt = $connection->prepare("SELECT * FROM `official` WHERE `name` = ?");
	$stmt->bind_param("s", $name);
	$stmt->execute();
	$result = $stmt->get_result();

	if($result->num_rows > 0) {
		$row = $result->fetch_assoc();
		$stmt->close();
		return htmlspecialchars($row["contact"]);
	} else {
		$stmt->close();
		return "N/A";
	}
}
?>
