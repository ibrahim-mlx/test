<?php

$url = "https://172.28.7.12:8443/rest/api/2/search?jql=cf%5B10301%5D~%22shoukat.qureshi@hotmail.com%22";
$ch = curl_init(); 
   $headers = array(
			 'Authorization: Basic c2hvdWthdC5hbGk6TXVsdGlseW54MQ==',
			 'Cookie: JSESSIONID=4ECD4A344A75608B7F461B425555FE44; atlassian.xsrf.token=BHGO-SEI1-S6WB-K5GP_52906fa39e90af29384ebe6c802e43811aa189cc_lin'
	   );
curl_setopt($ch, CURLOPT_URL,$url);

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


// Remove ssl check
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);    
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, false);

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

var_dump($response);  
  
curl_close($ch);

?>