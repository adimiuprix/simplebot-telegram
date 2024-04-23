<?php

$content = file_get_contents("php://input");

$update = json_decode($content, true);
if (($update['message']) != null) {

    $from_id = $update['message']['from']['id'];
    $chat_id = $update['message']['chat']['id'];
    $text = $update['message']['text'];
    $message_id = $update['message']['message_id']; 
    $type_msg = "message";

}

$bot_id = "6577558489:AAHZrbLK8YhqIGshhGeu4nhtLWL3ect8odQ";
$bot_url = "https://api.telegram.org/bot$bot_id/";

function KirimPesan($chat_id, $text){
    global $bot_url;

    file_get_contents($bot_url."sendMessage?chat_id=$chat_id&text=$text");
}

if($text == "/start"){
    KirimPesan($chat_id, "Halo selamat datang");
}else{
    KirimPesan($chat_id, "Kamu gak jelas njirrr!!");
}
// https://api.telegram.org/bot6577558489:AAHZrbLK8YhqIGshhGeu4nhtLWL3ect8odQ/setWebhook?url=https://tronsef.xyz/bot.php