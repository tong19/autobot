<?php



require "vendor/autoload.php";

$access_token = 'QQsufAT9V7FCTVmLK20E/+fMhkyreZroo/Ipi67ClFiulQanC5nNvdwLfBz+dbvk1D9UbQJIVAIU7h9uHa12w85A14o8M+YWNdK8b7swjwCQLzEXwc2Exo09zfLT0/8hmwnSaYYGQWE3tBpekFkGwgdB04t89/1O/w1cDnyilFU=';

$channelSecret = '12da493ef6241d3556199f785a795229';

$pushID = 'U11c2e7b3a60faa76996d88bccb8a8ea0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







