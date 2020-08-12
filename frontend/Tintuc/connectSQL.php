<?php
			$servername = "127.0.0.1";
			$username = "root";
			$password = "";
			$database = "adminhus";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$database);
			if (!$conn) {
			  die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully<br>";
			
?>