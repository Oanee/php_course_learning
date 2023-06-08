<?php

//if(isset($_POST['submit'])) {
if(isset($_POST['submit'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost', 'root', '', 'login_app');

	$query = "INSERT INTO login_information(username, password)";
	$query .= "VALUES ('$username', '$password')";

	$result = mysqli_query($connection, $query);
}
