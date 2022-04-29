<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "ternz2";

	$conn = new mysqli($server, $username, $password, $dbname);
		if (!$conn){
			echo "there is something wrong in the connection";
			}
		
		if(isset($_POST["submit"])){
		$name = $_POST["name"];
		$email= $_POST["email"];
		$website= $_POST["website"];
		$comment= $_POST["comment"];
		$gender= $_POST["gender"];
		
		$stmt = $conn->prepare("INSERT INTO `ternidss`(`name`, `email`,`website`, `comment`, `gender`)VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $email, $website, $comment, $gender);
		$stmt->execute();
		
		$stmt->close();
		$conn->close();
		}