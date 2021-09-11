<?php
ob_start();
session_start();
if(isset($_SESSION['email'])){
	header("location: index.php");
	}else{
		echo "forbosjsj";
		}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="css/style.css">

</head>
<body>