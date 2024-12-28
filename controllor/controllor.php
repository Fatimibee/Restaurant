<?php

include('../config/config.php');

if (isset($_REQUEST['book'])) {

	$name = $_REQUEST['name'];
	$member = $_REQUEST['member'];
	$table = $_REQUEST['table'];
	$dat = $_REQUEST['dat'];
	$contact = $_REQUEST['contact'];
	$email = $_REQUEST['email'];


	if (empty($name) || empty($member) || empty($table) || empty($dat) || empty($contact) || empty($email)) {
		$_SESSION['error'] = "please fill the blank field";
		header("location:" . $siteUrl . "/book.php");
		exit();

	} else {
		$sql = mysqli_query($conn, "INSERT INTO customer (name, member, tbl, create_date, contact, email) VALUES('$name','$member','$table','$dat', '$contact', '$email')");




		if ($sql) {
			$_SESSION['success'] = 'Your registration is successful.';
		} else {
			$_SESSION['error'] = 'Database error: ' . $sql->error;
		}

		header("location:" . $siteUrl . "/book.php");
		exit();
	}


}
