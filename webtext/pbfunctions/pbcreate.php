<?php
require('C:\xampp\htdocs\webtext\pbdb.php');

if (isset($_POST['create'])) {
	$name = $_POST['name'];
	$yearlevel = $_POST['yearlevel'];
	$college = $_POST['college'];
	$phonenumber = $_POST['phonenumber'];

	$queryCreate = "INSERT INTO contacts VALUES (null, '$name', '$yearlevel', '$college', '$phonenumber')";
	$sqlCreate = mysqli_query($connection, $queryCreate);

	echo '<script>alert("Contact Inserted! Press ok")</script>';
	echo '<script>window.location.href = "/webtext/phonebook.php"</script>';
} 


?>