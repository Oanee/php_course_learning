<?php

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $password;

	$connection = mysqli_connect('localhost', 'root', '', 'login_app');

	$query = "SELECT * FROM login_information";

	$result = mysqli_query($connection, $query);

	$row = mysqli_fetch_assoc($result);

	if ($row['password'] === $password) {
		echo 'loged in';
	}
}
