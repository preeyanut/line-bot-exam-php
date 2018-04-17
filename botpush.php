<?php



require "vendor/autoload.php";

$access_token = '1zUrbRMevFyvwU9OggkO/3wfYhZ8KSIIMzRe1ti6u30aXKdbOAgMZN6oIAo5UOEJ3UPskXnPnb0wvb4KpWmTzdj+LqwcOhUooByu6bnZ8fl8Mh6eGwltisJljhkjljRA79eDqPWtF1tESvekM/cYlwdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'b29088221a54fb2e9121af721af1145e';

$pushID = 'Ue026420a02af14642cd7d91e17ecb52a';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







