<html>
<body>
<form method="POST" action="">

<label>Contact No.:</label>
<input type="text" name="cont" id="cont"><br><br>
<label>Message:</label>
<input type="textarea" name="msg" Placeholder="Enter Message"><br/></br>

<button name="submit" type="submit">
</form>
</body>
<html>
<?php 
if(isset(_$POST['submit']))
{
		$mob='91'._$POST['cont'];
		$msg=_$POST['msg'];
		
	// Account details
	$apiKey = urlencode('NTczMjMwNzczOTZkNDg1NDMwMzU1NDQ4NjY1MzM3Njc=');
	
	// Message details
	$numbers = array($mob);
	$sender = urlencode('TXTLCL');
	$message = rawurlencode($msg);
 
	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;