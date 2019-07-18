<?php


$access_token = 'T5OMx/29Ak4yNFiQI1GT+xbcgKhPWwpldUX27QyPZv2PjPx/w4ulCRSYDGcXd6BJtt6sNTxRxJczCzaexq6JLuFg24+HMN+0HoN8tb23Xsx+pcQuZJOmJy4SV633uniNbhQhnq2y01r8A4etpsGzsQdB04t89/1O/w1cDnyilFU=';

$userId = 'U4864f0f85194a59b3f337b2685c2a43c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

