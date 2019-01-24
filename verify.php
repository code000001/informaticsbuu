<?php
$access_token = 'XiKv29KZIniJ7zw6BoFjOqCx1Z/et5LrVpHT1jZqTJPSZOyXr4p5z94WCQaE3s7jNx3Gst9GKGekVLu3sQKHEsHCCuZVK5uP/7ijFkWlJ8wtjxuGtmRN8GE6J0z6XJYTSvd28bsNme60GCGjUwjobgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
