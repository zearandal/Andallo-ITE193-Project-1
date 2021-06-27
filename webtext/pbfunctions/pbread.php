<?php
require('./pbdb.php');

$queryAccounts = "SELECT * FROM contacts"; 
$sqlAccounts = mysqli_query($connection, $queryAccounts);


?>