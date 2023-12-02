<?php require_once('header.php');$pdo = new PDO('mysql:host=localhost:3307;dbname=ecommerceweb', 'root', ''); ?>

<?php
	
	// Delete from tbl_subscriber
	$statement = $pdo->prepare("DELETE FROM tbl_subscriber WHERE subs_active=0");
	$statement->execute();

	header('location: subscriber.php');
?>