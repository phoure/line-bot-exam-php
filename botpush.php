<?php



require "vendor/autoload.php";

$access_token = 'xP4NQWEQCzw+/+93Fq2Ct3WbnLOhTj/IQLnqiNku4inVa45UnAfS61glvFdDIUriM6WCeAeuB7FfbYPO72WY5NL6lq1MhePgxFcD2TLYpHbxGaCiXAJvs1N1q4n2RmVgT1H8MfuGu80FzOh82+d5agdB04t89/1O/w1cDnyilFU=';

$channelSecret = '19e008e1a8e389b1d2e518e159026488';

$pushID = 'U2f115cec459c73d35957e9ed1e4b3110';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







