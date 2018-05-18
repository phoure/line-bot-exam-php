<?php
$access_token = 'xP4NQWEQCzw+/+93Fq2Ct3WbnLOhTj/IQLnqiNku4inVa45UnAfS61glvFdDIUriM6WCeAeuB7FfbYPO72WY5NL6lq1MhePgxFcD2TLYpHbxGaCiXAJvs1N1q4n2RmVgT1H8MfuGu80FzOh82+d5agdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
