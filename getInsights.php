<?php

## Acces configuration ##
$token = 'your token here';
$id = 'your ad id here'; 
$requests = 'name%2Cinsights%7Breach%2Cspend%2Cimpressions%2Cclicks%2Ccpp%2Ccreated_time%7D'; # customizable
$baseURL = 'https://graph.facebook.com/v14.0'; # you can change version here if it's outdated

$fullURL = "$baseURL/$id?&fields=$requests&access_token=$token";

$ch = curl_init($fullURL);

$response = json_decode(curl_exec($ch));

echo $response;

?>