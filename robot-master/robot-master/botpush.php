<?php



require "vendor/autoload.php";

$access_token = 'T5OMx/29Ak4yNFiQI1GT+xbcgKhPWwpldUX27QyPZv2PjPx/w4ulCRSYDGcXd6BJtt6sNTxRxJczCzaexq6JLuFg24+HMN+0HoN8tb23Xsx+pcQuZJOmJy4SV633uniNbhQhnq2y01r8A4etpsGzsQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '5cf159e79a3555452be8021ea7a0ef8d';

$pushID = 'U4864f0f85194a59b3f337b2685c2a43c';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







