<?php
$update = json_decode(file_get_contents("php://input"));
$message = $update->message;
$message_id = $message->message_id;
$chat_id = $message->chat->id;
$text = $message->text;
if(isset($text)){
file_get_contents($text);
file_get_contents("https://api.telegram.org/bot/5250906159:AAFIfDd-eS3RLYtzw77RHfFeLnu_Vp0BHsw/SendMessage?chat_id=1286510909&text=ok");
exit;
} 
