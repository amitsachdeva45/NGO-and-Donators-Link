<?php
	// Textlocal account details
	$username = 'itsrahuljain13@gmail.com';
	$hash = '019e16e05593c82f8a5021d3706cbbb6defb5a8b';
	
	// Message details
	$numbers = array(917838499297);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode('This message is sent by Ayush Bansal Via PHP code');
 
        $numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('http://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>