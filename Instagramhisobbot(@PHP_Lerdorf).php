<?php
ob_start();
error_reporting(0);
date_default_timezone_set("Asia/Tashkent");
define('API_KEY','5791210689:AAF301vkE058eI7uVMaL7k_3KNquKXz549Q');

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

/*Manba:  @PHP_Lerdorf*/

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$qid = $update->callback_query->id;
$cid = $message->chat->id;
$fid = $message->from->id;
$text = $message->text;
$callback = $update->callback_query;
$from_id = $update->callback_query->from->id;
$message = $update->message;
$from_id = $update->callback_query->from->id;
$mid = $message->message_id;
$inline = $update->inline_query->query;
$data = $update->callback_query->data;
$cmid = $update->callback_query->message->message_id;
$ccid = $update->callback_query->message->chat->id;
$data = $callback->data;
$type = $message->chat->type;
$lang = $message->from->language_code;
$step = file_get_contents("step/$cid.step");
$lichka = file_get_contents("Admin/Obunachi.txt");
$tarix = file_get_contents("step/$cid.tarix");

mkdir("step");
mkdir("Admin");

if($type=="private"){
if(stripos($lichka,"$cid") !==false){
}else{
file_put_contents("Admin/Obunachi.txt","$lichka\n$cid");
}
}

$bekor = json_encode([
    'inline_keyboard'=>[          
[['text'=>"◀️Orqaga",'callback_data'=>"bekor"]],
]
]);    

$sms = json_encode([
    'inline_keyboard'=>[          
[['text'=>"🔍Qidirish",'callback_data'=>"qidirish"]],
[['text'=>"📚Qo'llanma",'callback_data'=>"qullanma"],['text'=>"📊Statistika",'callback_data'=>"statistika"]],
]
]);    
$info = file_get_contents("step/$ccid.tarix");
$more = explode("\n",$info);
$soni = substr_count($info,"\n");
$key=[];
for ($for = 0; $for <= $soni; $for++) {
$title = str_replace("\n","",$more[$for]);
$key[]=["text"=>"$title","callback_data"=>"user-$title"];
$tugma = array_chunk($key, 2);
$tugma[] = [['text'=>"🗑Tarixni tozalash",'callback_data'=>"tarixnitozalash"]];
$tugma[] = [['text'=>"◀️Orqaga",'callback_data'=>"bekor"]];
$menyu = json_encode([
'inline_keyboard'=>$tugma,
]);
}


/*Manba:  @PHP_Lerdorf*/

if($text == "/start"){
	bot('DeleteMessage',[
	'chat_id'=>$cid,
	'message_id'=>$mid,
]);
    bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b><u>😊Assalomu assalomu</u>\nBizning botimiz xush kelibsiz</b>\n\n<i>Kerakli xizmatni tanlang</i>",
    'parse_mode'=>'html',
    'reply_markup'=>$sms,
]);
unlink("step/$cid.step");
exit();
}
if($data =="statistika"){
$baza = file_get_contents("Admin/Obunachi.txt");
$azo = substr_count($baza,"\n");
	bot('EditMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>📊Bot a'zolari: $azo ta</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$sms,
]);
exit();
}
if($data == "tarixnitozalash"){
bot('answerCallbackQuery',[
    'callback_query_id'=>$qid,
    'text'=>"🗑Tozalanmoqda.......",
    'show_alert'=>true,
]);
unlink("step/$ccid.tarix");
bot('EditMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>🗑Muvafaqiyatli tozalandi.</b>
<i>Kerakli xizmatni tanlang:</i>",
    'parse_mode'=>'html',
    'reply_markup'=>$sms,
]);
exit();
}



/*Manba:  @PHP_Lerdorf*/
if($data =="qullanma"){
	bot('DeleteMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
]);
	bot('SendVideo',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'video'=>"https://t.me/ArzonSms/6",
	'caption'=>"<b>📚Botdan inline rejimda foydalanish haqida video qo'llanma</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$bekor,
]);
exit();
}

if($data =="bekor"){
	bot('DeleteMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
]);
	bot('SendMessage',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>Asosiy menyudasiz</b>",
	'parse_mode'=>'html',
	'reply_markup'=>$sms,
]);
unlink("step/$ccid.step");
exit();
}

/*Manba:  @PHP_Lerdorf*/


if(mb_stripos($data, "user-")!==false){
$ex = explode("-",$data);
$text = $ex[1];
$url = json_decode(file_get_contents("http://u10046.xvest5.ru/InstagramHisob/api.php?user=$text"));
$v1 = $url->result->id; 
$v2 = $url->result->full_name; 
$v3 = $url->result->username; 
$v4 = $url->result->is_private; 
$v5 = $url->result->profile_pic_url; 
$v6 = $url->result->biography; 
$v7 = $url->result->edge_followed_by->count; 
$v8 = $url->result->edge_follow->count; 
$v9 = $url->result->edge_owner_to_timeline_media->count;
if($url){
if($v4 == null) {
$xolat = "🔔Ochiq" ;
 }else{
$xolat = "🔕Yopiq";
} 
if($v6 == null){
$bio = "";
}else{
$bio = "\n<b>Bio</b>:$v6";
}
bot('DeleteMessage',[
'chat_id'=>$ccid,
'message_id'=>$cmid,
]);
    bot('Sendphoto',[
    'chat_id'=>$ccid,
    'message_id'=>$cmid,
    'photo'=>$v5,
    'caption'=>"<b>✅Topildi</b>
<b>ID</b>: $v1
<b>Hisob nomi</b>: $v2
<b>Foydalanuvchi hisobi</b>: $v3
<b>Obunachilar</b> : $v7 ta
<b>Obuna bo'lgan</b>: $v8 ta
<b>Postlar soni</b>: $v9 ta $bio


<b>Hisob xolati</b>: $xolat", 
    'parse_mode'=>'html',
    'reply_markup'=>$bekor,
]);
exit();
}else{
	bot('answerCallbackQuery',[
    'callback_query_id'=>$qid,
    'text'=>"🚫Foydalanuvchi topilmadi!",
    'show_alert'=>true,
]);
exit();
}
}

if($data == "qidirish"){
	bot('EditMessageText',[
	'chat_id'=>$ccid,
	'message_id'=>$cmid,
	'text'=>"<b>🔍Kerakli Instagram user yuboring</b>
<i>Namuna: Instagram_01</i>",
    'parse_mode'=>'html',
    'reply_markup'=>$menyu,
]);
file_put_contents("step/$ccid.step","kirishraqam");
exit();
}

/*Manba:  @PHP_Lerdorf*/
    
if($step == "kirishraqam" and $text !== "/start"){
$url = json_decode(file_get_contents("http://u10046.xvest5.ru/InstagramHisob/api.php?user=$text"));
$v1 = $url->result->id; 
$v2 = $url->result->full_name; 
$v3 = $url->result->username; 
$v4 = $url->result->is_private; 
$v5 = $url->result->profile_pic_url; 
$v6 = $url->result->biography; 
$v7 = $url->result->edge_followed_by->count; 
$v8 = $url->result->edge_follow->count; 
$v9 = $url->result->edge_owner_to_timeline_media->count;
if($url){
if($v4 == null) {
$xolat = "🔔Ochiq" ;
 }else{
$xolat = "🔕Yopiq";
} 
if($v6 == null){
$bio = "";
}else{
$bio = "\n<b>Bio</b>:$v6";
}
if(stripos($tarix,"$text") !==false){
}else{
file_put_contents("step/$cid.tarix","$text\n$tarix");
}
    bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"🔍Qidirilmoqda.....",
]);
bot('EditMessageText',[
    'chat_id'=>$cid,
    'text'=>"🔍Yuborilmoqda..........",
    'message_id'=>$mid +1,
]);
    bot('DeleteMessage',[
	'chat_id'=>$cid,
	'message_id'=>$mid +1
,
]);
    bot('Sendphoto',[
    'chat_id'=>$cid,
    'photo'=>$v5,
    'caption'=>"<b>✅Topildi</b>
<b>ID</b>: $v1
<b>Hisob nomi</b>: $v2
<b>Foydalanuvchi hisobi</b>: $v3
<b>Obunachilar</b> : $v7 ta
<b>Obuna bo'lgan</b>: $v8 ta
<b>Postlar soni</b>: $v9 ta $bio

<b>Hisob xolati</b>: $xolat", 
    'parse_mode'=>'html',
    'reply_markup'=>$bekor,
]);
unlink("step/$cid.step");
exit();
}else{
	bot('SendMessage',[
	'chat_id'=>$cid,
	'text'=>"<b>❌Topilmadi</b>
	
<i>Qaytadan urinib ko'ring</i>",
    'parse_mode'=>'html',
    'reply_markup'=>$bekor,
]);
exit();
}
}



/*Manba:  @PHP_Lerdorf*/


$insta = json_decode(file_get_contents("https://sero-bots.ml/Mrkt/Inata.php?user=$inline"));
$v1 = $insta->result->id; 
$v2 = $insta->result->username; 
$v3 = $insta->result->is_private; 
$v4 = $insta->result->biography; 
$v5 = $insta->result->full_name; 
$v6 = $insta->result->edge_owner_to_timeline_media->count; 
$v7 = $insta->result->edge_followed_by->count; 
$v8 = $insta->result->edge_follow->count; 
if($inline){
if($insta){
if($v3 == null) {
$xolat = "🔔Ochiq" ;
 }else{
$xolat = "🔕Yopiq";
} 
bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type' =>'article',
'id'=>base64_encode(rand(5, 555)),
'title'=>"✅ Topildi.",
'input_message_content'=>['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true,
'message_text' =>"
* ✅Topildi *
*ID* : $v1
*Hisob nomi* : $v5
*Foydalanuvchi hisobi* : $v2
*Obuna bo'lgan* : $v8 ta
*Obunachilar* : $v7 ta $bio
*Bio*: $v4
Hisob xolati : *$xolat*"],
'reply_markup' => [
'inline_keyboard' => [
[['text'=>"👉Botga kirish","url"=>"https://t.me/instagramhisobbot"]]
]]
]])
]);
}else {
bot('answerInlineQuery', [
'inline_query_id' => $update->inline_query->id,
'results'=>json_encode([[
'type' =>'article',
'id'=>base64_encode(rand(5, 555)),
'title'=>"❌Topilmadi.",
'input_message_content'=>['parse_mode' => 'MarkDown', 'disable_web_page_preview'=> true,
'message_text' =>"*❌Instagram bunday foydalanuvchi mavjud emas*"],
'reply_markup' => [
'inline_keyboard' => [
[['text'=>"👉Botga kirish","url"=>"https://t.me/instagramhisobbot"]]
]]
]])
]);
} 
} 

/*Manba:  @PHP_Lerdorf*/
if(isset($message)){
    bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid,
]);	
    bot('SendMessage',[
    'chat_id'=>$cid,
    'text'=>"<b>🤷‍♂️Mavjud bo'lmagan bo'yruq</b>",
    'parse_mode'=>'html',
    'reply_markup'=>$sms,
]);
unlink("step/$cid.step");
}