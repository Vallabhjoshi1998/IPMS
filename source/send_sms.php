<?php
$apiURL = 'https://api.chat-api.com/instance386567/ ';
$token = 'za4r0jy70h4n5c3g';

$message = 'Hello, World!';
$phone = '919665661358';

$data = json_encode(
    array(
        'chatId'=>$phone.'@c.us',
        'body'=>$message
    )
);
$url = $apiURL.'message?token='.$token;
$options = stream_context_create(
    array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $data
        )
    )
);
$response = file_get_contents($url,false,$options);
echo $response; exit;