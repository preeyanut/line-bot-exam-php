<?php


$access_token = '1zUrbRMevFyvwU9OggkO/3wfYhZ8KSIIMzRe1ti6u30aXKdbOAgMZN6oIAo5UOEJ3UPskXnPnb0wvb4KpWmTzdj+LqwcOhUooByu6bnZ8fl8Mh6eGwltisJljhkjljRA79eDqPWtF1tESvekM/cYlwdB04t89/1O/w1cDnyilFU=';

$userId = 'Ue026420a02af14642cd7d91e17ecb52a';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

