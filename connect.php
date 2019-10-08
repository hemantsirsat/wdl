<?php
	$name = filter_input(INPUT_POST, 'name');
	$email = filter_input(INPUT_POST, 'email');
	$phone = filter_input(INPUT_POST, 'phone');
	$interest = filter_input(INPUT_POST, 'interest');
	$expectation = filter_input(INPUT_POST, 'expectations');

	if (!empty($username)){
	if (!empty($password)){
	$host = "127.0.0.1";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "tourism";
	// Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
	if (mysqli_connect_error()){
	die('Connect Error ('. mysqli_connect_errno() .') '
	. mysqli_connect_error());
	}
	else{
	$sql = "INSERT INTO customer_info (full_name, email,phone,interest,expectations)
	values ('$name','hemant@ieee.org','$phone','$interest','$expectation')";
	if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
	}
	else{
	echo "Error: ". $sql ."
	". $conn->error;
	}
	$conn->close();
	}
	}
?>