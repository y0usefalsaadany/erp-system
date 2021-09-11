<?php
$send = $_POST['send'];
if (isset($send)){
	$name            = trim(filter_var($_POST['name'],FILTER_SANITIZE_STRING));
	$password = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
	$email          = trim(filter_var($_POST['mail'],FILTER_SANITIZE_STRING));
	$name = htmlspecialchars($name);
	$password = htmlspecialchars($password);
	$email = htmlspecialchars($email);
	$data = file_get_contents("admin.json");
	$json= json_decode($data, true);
	if (empty($json)){
		$json_add = array(
							"name"=> $name,
							"email" => $email,
							"password" => $password);
		$content = json_encode($json_add,JSON_PRETTY_PRINT);
		file_put_contents('admin.json',"[$content]");
		echo "success create account";
		}else{
			$json= json_decode($data, true);
			foreach ($json as $data) {
				if ( $email == $data['email']) {
						echo "sorry this account is used";
					}elseif($passowrd == $data['password'] && $email == $data['email']){
						echo "sorry this account is used";
						exit();
                    }else{
                    	if (empty($email) || empty($password)){
                    		echo "sorry value is empty";
                    	}else{
						$json_add = array("name"=> $name,"email" => $email,"password" => $password);
						array_push($json,$json_add);		
						file_put_contents('admin.json', json_encode($json,JSON_PRETTY_PRINT));
						echo "success create Account";
						}
					}
				}
		}
}