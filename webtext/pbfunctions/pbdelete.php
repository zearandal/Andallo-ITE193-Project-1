<?php
require('C:\xampp\htdocs\webtext\pbdb.php');

if (isset($_POST['delete'])) {
	$deleteid = $_POST['deleteid'];

	$queryDelete = "DELETE FROM contacts WHERE id = $deleteid";
	$sqlDelete = mysqli_query($connection, $queryDelete);

	echo '<script>alert("Contact Deleted! Press ok")</script>';
	echo '<script>window.location.href = "/webtext/phonebook.php"</script>';
} 



?>