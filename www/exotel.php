<?php

$post_data = array(
    'From'   => '8033013048',
    'To'    => '8762228118',
    'Body'  => 'Reply 1/2 to 8088919888 to choose an appointment with Dr. Rajasekar');
 
 
$exotel_sid = "msrit"; 
$exotel_token = "4f4c82e67dfa8b1396465f8160e0d20267b0306c"; 
 

 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
print "Response = ".print_r($http_result);

?>