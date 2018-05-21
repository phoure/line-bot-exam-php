<?php

$access_token = 'MaNINLONsNr6WVQXl5lw1qHUUEstWHC45HctvmJB0+EghI4B0z9cJfC3BUrsWGrHxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQFTfXyJrUnsR/mVKm/pKpWWYo9zsijkiWqOjleKvfJRIwdB04t89/1O/w1cDnyilFU=';
$channelSecret = '67661a587eff07930c006c7b4c1c0b10';

/*
$url = 'https://api.line.me/v2/bot/message/7989650169837/content';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

    $tempfile = tmpfile();
    fwrite($tempfile, $result);
fread($tempfile,"10");
fclose($tempfile);
*/


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.line.me/v2/bot/message/7989650169837/content",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer MaNINLONsNr6WVQXl5lw1qHUUEstWHC45HctvmJB0+EghI4B0z9cJfC3BUrsWGrHxB9nEFqGV7B3rrNr14cQjMh1LzeKooYfaxqwmwsCJQFTfXyJrUnsR/mVKm/pKpWWYo9zsijkiWqOjleKvfJRIwdB04t89/1O/w1cDnyilFU=",
    "cache-control: no-cache",
    "postman-token: ec03cb56-79ae-6486-bda1-b94aacef5e50"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  
    $tempfile = tmpfile();
    fwrite($tempfile, $response->getRawBody());
    fread($tempfile,"10");
    fclose($tempfile);
}

?>

