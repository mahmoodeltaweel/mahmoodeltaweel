<?php 
// BY BROK - @aaaDaa & @php_aba //
ob_start();
$admin = "1444037923"; // Your ID //
define('API_KEY','Token'); // Your Token //
echo file_get_contents("https://api.telegram.org/bot".API_KEY."/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){$x_BRK = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$x_BRK";
$i_BRK = file_get_contents($url); return json_decode($i_BRK);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message; $chat_id = $message->chat->id;
$from_id = $message->from->id; $name = $message->from->first_name; $text = $message->text;
$mid = $message->message_id; $name2 = $update->callback_query->from->first_name; $message_id2 = $update->callback_query->message->message_id; $chat_id2 = $update->callback_query->message->chat->id;
$from_id2 = $update->callback_query->from->id; $message_id = $update->callback_query->message->message_id; $data = $update->callback_query->data;
$i_BRK = $admin; 
$x_BRK = file_get_contents("x_BRK.txt");
$x_BRK0 = file_get_contents("x_BRK0.txt");
$x_BRK1= file_get_contents("x_BRK1.txt");
$x_BRK5 = file_get_contents("x_BRK2.txt");
$x_BRK6 = file_get_contents("x_BRK3.txt");
$x_BRK20 = json_decode(file_get_contents('php://input'));
$x_BRK18 = $update->message;
$chat_id = $x_BRK18->chat->id;
$text = $x_BRK18->text;
$data = $x_BRK20->callback_query->data;
$x_BRK12 = $x_BRK20->callback_query->message->chat->id;
$x_BRK14 =  $x_BRK20->callback_query->message->message_id;
$x_BRK15 = $x_BRK18->from->first_name;
$x_BRK16 = $x_BRK18->from->username;
$x_BRK11 = $x_BRK18->from->id;
$x_BRK2 = explode("\n",file_get_contents("x_BRK4.txt"));
$x_BRK3 = count($x_BRK2)-1;
if ($x_BRK18 && !in_array($x_BRK11, $x_BRK2)) {
    file_put_contents("x_BRK4.txt", $x_BRK11."\n",FILE_APPEND);
  }
$x_BRK9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK0&user_id=".$x_BRK11);
$x_BRK10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$x_BRK1&user_id=".$x_BRK11);
if($x_BRK18 && (strpos($x_BRK9,'"status":"left"') or strpos($x_BRK9,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK9,'"status":"kicked"') or strpos($x_BRK10,'"status":"left"') or strpos($x_BRK10,'"Bad Request: USER_ID_INVALID"') or strpos($x_BRK10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- عذرا عزيزي يجب عليك الاشتراك في قناة البوت اولا

$x_BRK0
$x_BRK1",
]);return false;}
if($text == "/start" and $x_BRK11 == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'Kings_Domain'=>json_encode([ 
'Kings_Domain'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"Kings_Domain"],['text'=>'- حذف قناة' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"Kings_Domain"],['text'=>'- حذف قناة' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"x_BRK5"],['text'=>'- اذاعة نص' ,'callback_data'=>"x_BRK6"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"x_BRK7"]],
[['text'=>'- التواصل' ,'callback_data'=>"x_BRK"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"Kings_Domain"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- احصائيات البوت', 'callback_data'=>"status"]], 
   ] 
   ])
]);
}
if($data == "Kings_Domain" ){
bot('EditMessageText',[
'chat_id'=>$Kings_Domain,
'message_id'=>$Kings_Domain,
"text"=>'- اهلا بك في قائمة اوامر الادمن',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- قناة الاشتراك الاجباري الاولى' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"Kings_Domain"],['text'=>'- حذف قناة' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'قناة الاشتراك الاجباري الثانيه' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- وضع قناة' ,'callback_data'=>"Kings_Domain"],['text'=>'- حذف قناة' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- - عرض قنوات الاشتراك الاجباري' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- قائمة الاذاعه' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- اذاعه بلتوجيه' ,'callback_data'=>"Kings_Domain"],['text'=>'- اذاعة نص' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- عدد المشتركين' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- التواصل' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- تفعيل التواصل' ,'callback_data'=>"Kings_Domain"],['text'=>'- تعطيل التواصل' ,'callback_data'=>"Kings_Domain"]],
[['text'=>'- احصائيات البوت', 'callback_data'=>"status"]], 
   ] 
   ])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK0"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK0");
}
if($text and $x_BRK == "x_BRK0" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة اولى للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK0.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK1"){
bot('EditMessageText',[
    'chat_id'=>$Kings_Domain,
    'message_id'=>$Kings_Domain,
'text'=>'- تم حذف القناة الاولى',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"Kings_Domain"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK0.txt");
}
if($data == "x_BRK2"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل معرف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"Kings_Domain"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK1");
}
if($text and $x_BRK == "x_BRK1" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم حفظ $text كقناة ثانيه للاشتراك الاجباري
- تأكد من رفع البوت ادمن بلقناة" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK1.txt","$text");
unlink("x_BRK.txt");
}
if($data == "x_BRK3"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم حذف القناة الثانيه',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"Kings_Domain"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK1.txt");
}
if($data == "x_BRK4"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- هذه هي قائمة قنوات الاتشراك الاجباري
1 => $x_BRK0
- - - - - 
2 => $x_BRK1",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK5"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل الرساله ليتم توجيهها لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK2");
}
if($x_BRK18 and $x_BRK == "x_BRK2" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم توجيه الرساله ل$x_BRK3 مشترك",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('forwardMessage', [
'chat_id'=>$x_BRK2[$i],
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK6"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- ارسل النص الان ليتم نشره لجميع المشتركين',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- الغاء' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK.txt","x_BRK3");
}
if($text and $x_BRK == "x_BRK3" and $x_BRK11 == $i_BRK){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"- تم نشر رسالتك ل$x_BRK3 مشترك" ,
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
for($i=0;$i<count($x_BRK2); $i++){
bot('sendMessage', [
'chat_id'=>$x_BRK2[$i],
'text'=>$text
]);
unlink("x_BRK.txt");
}
}
if($data == "x_BRK7"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>"- عدد مشتركين البوت $x_BRK3",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
}
if($data == "x_BRK11"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تفعيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
file_put_contents("x_BRK3.txt","x_BRK");
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 != $i_BRK){
bot('forwardMessage', [
'chat_id'=>$i_BRK,
'from_chat_id'=>$x_BRK11,
'message_id'=>$x_BRK18->message_id
]);
}
if($x_BRK18 and $x_BRK6 == "x_BRK" and $x_BRK11 == $i_BRK){
bot('sendMessage',[
'chat_id'=>$x_BRK18->reply_to_message->forward_from->id,
    'text'=>$text,
    ]);
}
if($data == "x_BRK12"){
bot('EditMessageText',[
    'chat_id'=>$x_BRK12,
    'message_id'=>$x_BRK14,
'text'=>'- تم تعطيل التواصل',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'- رجوع' ,'callback_data'=>"x_BRK"]],
]])
]);
unlink("x_BRK.txt");
unlink("x_BRK3.txt");
}
if($text == '/start'){
file_put_contents($chat_id,'');
     bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي $name في بوت صنع فيزات وهمية .\n- اولا قم بتعيين الBIN الخاص بك بعدها قم بصنع فيزات .\n- - - - -\n- BY => @aaaZaa .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin'],['text'=>'- صنع فيزات .','callback_data'=>'makev']],
  [['text'=>'- BROK .','url'=>'https://t.me/aaaZaa']],
  ],
  ])
  ]);
  }
  if($data == 'putbin'){
      file_put_contents($chat_id2,'putbin');
      bot('EditMessageText',[
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>"- حسنا عزيزي قم بأرسال الBIN الخاص بك .\n- ملاحظة : يمكنك ارسال BIN متكون من 6 ارقام فقط .\n- مثال على الBIN => 123456 .",
          'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
],
])
      ]);
  }
  $brokc = file_get_contents($chat_id);
  if($text and $text != '/start' and $brokc == 'putbin'){
      bot('sendMessage' ,[
          'chat_id'=>$chat_id,
          'text'=>"- حسنا عزيزي تم تعيين $text البن الخاص بك .",
                    'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
],
])
      ]);
      file_put_contents("$chat_id.txt",$text);
      unlink($chat_id);
  }
  $bin = file_get_contents("$chat_id2.txt"); 
  if($data == 'makev' and $bin != ''){
$codes = ['1','2','3','4','5','6','7','8','9','0'];
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$monthcode = ['01','02','03','04','05','06','07','08','09','10','11','12'];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearcode = ['2022','2023','2024','2025','2026'];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode1 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode2 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode3 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode4 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode5 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode6 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode7 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode8 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
$code1 = array_rand($codes,1);
$code2 = array_rand($codes,1);
$code3 = array_rand($codes,1);
$code4 = array_rand($codes,1);
$code5 = array_rand($codes,1);
$code6 = array_rand($codes,1);
$code7 = array_rand($codes,1);
$code8 = array_rand($codes,1);
$code9 = array_rand($codes,1);
$code10 = array_rand($codes,1);
$bcode1 = $codes[$code1];
$bcode2 = $codes[$code2];
$bcode3 = $codes[$code3];
$bcode4 = $codes[$code4];
$bcode5 = $codes[$code5];
$bcode6 = $codes[$code6];
$bcode7 = $codes[$code7];
$bcode8 = $codes[$code8];
$bcode9 = $codes[$code9];
$bcode10 = $codes[$code10];
$montherand = array_rand($monthcode,1);
$monthebrok = $monthcode[$montherand];
$yearrand = array_rand($yearcode,1);
$yearbrok = $yearcode[$yearrand];
$brok = "$bcode3$bcode10$bcode5";
$bfcode9 = "$bin$bcode1$bcode2$bcode3$bcode4$bcode5$bcode6$bcode7$bcode8$bcode9$bcode10|$monthebrok|$yearbrok|$brok";
bot ('EditMessageText',[
    'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=>"`$bfcode\n$bfcode1\n$bfcode2\n$bfcode3\n$bfcode4\n$bfcode5\n$bfcode6\n$bfcode7\n$bfcode8\n$bfcode9`\n- - - - -\n- BY => @aaaZaa .", 
                        'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- صنع فيزات مرة اخرى .','callback_data'=>'makev']],
  [['text'=>'- رجوع .','callback_data'=>'backkk']],
  [['text'=>"- اضغط هنا لفحص الفيزات .",'url'=>"https://www.mrchecker.net/card/ccn2/"]], 
],
])
]);
  }
  if($data == 'makev' and $bin == ''){
  	bot('EditMessageText', [
  'chat_id'=>$chat_id2, 
  'message_id'=>$message_id2, 
  'text'=>"- يجب عليك وضع BIN اولا.",
  'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin']], 
 ], 
])
]);
} 
if($data == 'backkk'){
file_put_contents($chat_id2,'');
     bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2, 
'text'=>"- اهلا بك عزيزي $name في بوت صنع فيزات وهمية .\n- اولا قم بتعيين الBIN الخاص بك بعدها قم بصنع فيزات .\n- - - - -\n- BY => @Kings_Domain .",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
  [['text'=>'- تعيين الBIN .','callback_data'=>'putbin'],['text'=>'- صنع فيزات .','callback_data'=>'makev']],
  [['text'=>'- BROK .','url'=>'https://t.me/Kings_Domain']],
  ],
  ])
  ]);
  }
