<?php
//error_reporting(-1);

$username = "api@aplusmeetings.com";
$password = "c23A74V0ADHi";



$URL = "https://reg.aplusmeetings.com/certainExternal/service/v1/AgendaItem/marina/LWD2018?includeList=inventory&isActive=true";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_HTTPHEADER, "Accept :- application/json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
$result=utf8_encode(curl_exec($ch));
$finalResult = json_decode($result,true);
curl_close ($ch);


print_r($result);

?>
