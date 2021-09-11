<?php
ob_start();

function getUsers(){
	$file = 'json.json';
	return $json_file = json_decode(file_get_contents($file),true);
	}
