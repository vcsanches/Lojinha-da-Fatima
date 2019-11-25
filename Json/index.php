<?php

$path = explode('/', $_GET['path']);
$contents = file_get_contents('db.json');

$json = json_decode($contents, true);

$method = $_SERVER['REQUEST_METHOD'];

header('content-type: application/json');
$bobdy = file_get_contents('php://input');

if($method === 'GET'){
	if($json[$path[0]]){
		echo json_encode($json[$path[0]]);
	}else{
		echo '[]';
	}
}
if($method === 'POST'){
	$jsonBody = json_decode($body, true);
	$jsonBobdy['id'] = time();

	if(!$json[$path[0]]){
		$json[$path[0]] = [];
	}
	$json[$path[0]] [] = $jsonBody;
	echo json_decode($jsonBody);
	file_put_contents('db.json', json_enconde($json));
}



