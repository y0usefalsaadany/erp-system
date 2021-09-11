<?php 
ob_start();
session_start();
$email = trim(filter_var($_POST['mail'],FILTER_SANITIZE_EMAIL));
$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
$email = htmlspecialchars($email);
$password = htmlspecialchars($password);
$send = $_POST['send'];
if (isset($send)){
		$data = file_get_contents('admin/admin.json');
		$json = json_decode($data, true);
		foreach($json as $js ){
			if($js['email'] == $email && $js['password'] == $password){
				$_SESSION['email']= $email;
				header("location: admin/index.php");
			}else {
				echo "<br>sorry this info is not correct<br>";
				}
	}
}