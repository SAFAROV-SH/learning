<?php
ob_start();
date_default_timezone_set("Asia/Tashkent");

    define('SAFAROV_DEV','7362485945:AAH-eWLUBEmv9Z_iA9I0_NVWchTq3-ZQ_e4'); 
    function bot($data,$method=[]){
        $url = "https://api.telegram.org/bot".SAFAROV_DEV."/".$data;
        $shohijahon = curl_init();
        curl_setopt($shohijahon,CURLOPT_URL,$url);
    curl_setopt($shohijahon,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($shohijahon,CURLOPT_POSTFIELDS,$method);
        $res = curl_exec($shohijahon);
        if(curl_error($shohijahon)){
            var_dump(curl_error($shohijahon));
        }else{
            return json_decode($res);
        }
    }

$admin = 1690043054;
$api = "fhgdfg";

$servername = "localhost";
$username = "x_u_12015_ucbot";
$password = "ucbot";
$dbname = "x_u_12015_ucbot";
$conn = new mysqli($servername, $username, $password, $dbname);



    $safarov = json_decode(file_get_contents('php://input'));
    $shohijahon = $safarov->message;
    $data = $safarov->callback_query->data;
    $mid2 = $safarov->callback_query->message->message_id;
    $cid2 = $safarov->callback_query->message->chat->id;
    $cid = $shohijahon->chat->id;
    $text=$shohijahon->text;
    $id = $shohijahon->reply_to_message->from->id;
    $reply = $shohijahon->reply_to_message->text;
    $mid = $shohijahon->message_id;

$time = date('H:i');
    $update = json_decode(file_get_contents("php://input"));
    
    $message = $update->message;
    $call = $update->callback_query;
$qid = $call->id;
$lid = $update->callback_query->id;
    $cid = $message->chat->id;
    $chat_id = $message->chat->id;
    $uid = $message->from->id;
    $mid = $message->message_id;
    $type = $message->chat->type;
    $text = $message->text;
    $tx = $message->text;
    $name = $message->chat->first_name."  ".$message->chat->last_name;
$usernamem = $message->chat->username;
    $data = $update->callback_query->data;
    $cid2 = $update->callback_query->message->chat->id;
    $uid2 = $update->callback_query->from->id;
    $mid2 = $update->callback_query->message->message_id;
    $chan=$update->channel_post;
    $chanid=$chan->chat->id;
    $chantext=$chan->text;
    $contact = $message->contact;
    $contactid = $contact->user_id;
    $phonenumber = $message->contact->phone_number;
    $step = file_get_contents("stat/$cid.txt");
    $miqdori = file_get_contents("stat/$cid.dat");
    $forward = $shohijahon->forward;
    mkdir("stat");
$contact = $message->contact;
    $contactid = $contact->user_id;
$contactuser = $contact->username;
$contactname = $contact->first_name;
$phonenumber = $contact->phone_number;


function sendp($kid, $text, $key){
    bot("sendPhoto",[
    "chat_id"=>$kid,
    'photo'=>"https://u12015.xvest3.ru/newproject/tonn.jpg",
    "caption"=>$text,
    'reply_markup'=>$key,
    'parse_mode'=>'html',
]);
}
function sendm($kid, $text, $key){
    bot("sendmessage",[
    "chat_id"=>$kid,
    "text"=>$text,
    'reply_markup'=>$key,
    'parse_mode'=>'html',
]);
}
function balance($uid){
    global $conn;
    $sql = "SELECT * FROM users WHERE user_id = '$uid'";
    
    $result = $conn->query($sql);
    $result = @mysqli_fetch_assoc($result);
    $okol = $result['balance'];
    return $okol;
}

function menum($uid){
$shifr = str_replace('1', 'a', $uid);
$shifr = str_replace('2', 'b', $shifr);
$shifr = str_replace('3', 'd', $shifr);
$shifr = str_replace('4', 'e', $shifr);
$shifr = str_replace('5', 'f', $shifr);
$shifr = str_replace('6', 'g', $shifr);
$shifr = str_replace('7', 'h', $shifr);
$shifr = str_replace('8', 'i', $shifr);
$shifr = str_replace('9', 'j', $shifr);
$shifr = str_replace('0', 'k', $shifr);
    $play = json_encode([
        'inline_keyboard'=>[
[['text' => "Play now", 'web_app' => ['url' => "https://u12015.xvest3.ru/newproject/site/?session=$shifr"]]],
[["text"=>"🔗 Intive a friend","switch_inline_query"=>$uid],],
        ]]);

    return $play;
}

function menu($uid){
$shifr = str_replace('1', 'a', $uid);
$shifr = str_replace('2', 'b', $shifr);
$shifr = str_replace('3', 'd', $shifr);
$shifr = str_replace('4', 'e', $shifr);
$shifr = str_replace('5', 'f', $shifr);
$shifr = str_replace('6', 'g', $shifr);
$shifr = str_replace('7', 'h', $shifr);
$shifr = str_replace('8', 'i', $shifr);
$shifr = str_replace('9', 'j', $shifr);
$shifr = str_replace('0', 'k', $shifr);
    $play = json_encode([
        'inline_keyboard'=>[
[['text' => "Boshlash!", 'web_app' => ['url' => "https://u12015.xvest3.ru/newproject/site/?session=$shifr"]]],
[['text'=>"Bot yangiliklari",'url'=>"https://t.me/TonTime_news"]]

        ]]);

    return $play;
}




if ($tx=="/start") {
$sql = "SELECT * FROM users WHERE user_id = '$cid'";
    
    $result1 = $conn->query($sql);
    $result1 = @mysqli_fetch_assoc($result1);
    $id = $result1['id'];
    if (!$id) {
mysqli_query($conn, "INSERT INTO users (`user_id`,`ref_id`,`type`,`task`) VALUES ('$cid','1','ton','0')");

sendp($cid, "Salom <i>$name</i> Bu @UcMineBot !

Ushbu loyiha uc qazish uchun ishlab chiqilgan💎

Siz bepul uc ga ega bo'lishingiz mumkin🎁

Do'stlaringizni taklif qiling va qo'shimcha uc paketlariga ega bo'ling🖇

©️Ishlab chiquvchi: <i>Not Shaxa</i>", menu($cid));
    }else{
        $shifr = str_replace('1', 'a', $cid);
$shifr = str_replace('2', 'b', $shifr);
$shifr = str_replace('3', 'd', $shifr);
$shifr = str_replace('4', 'e', $shifr);
$shifr = str_replace('5', 'f', $shifr);
$shifr = str_replace('6', 'g', $shifr);
$shifr = str_replace('7', 'h', $shifr);
$shifr = str_replace('8', 'i', $shifr);
$shifr = str_replace('9', 'j', $shifr);
$shifr = str_replace('0', 'k', $shifr);
        sendp($cid, "Salom <i>$name</i> Bu @UcMineBot !

Ushbu loyiha uc qazish uchun ishlab chiqilgan💎

Siz bepul uc ga ega bo'lishingiz mumkin🎁

Do'stlaringizni taklif qiling va qo'shimcha uc paketlariga ega bo'ling🖇

©️Ishlab chiquvchi: <i>Not Shaxa</i>", menu($cid));
    }
}

if(mb_stripos($text,"/start ")!==false){
$bgh=explode(" ",$text)[1];
$id = str_replace("id","",$bgh);
$sql = "SELECT * FROM users WHERE user_id = '$cid'";
    
    $result1 = $conn->query($sql);
    $result1 = @mysqli_fetch_assoc($result1);
    $bid = $result1['id'];

if (!$bid) {
mysqli_query($conn, "INSERT INTO users (`user_id`,`ref_id`,`type`,`task`) VALUES ('$cid','$id','ton','0')");

sendp($cid, "Salom <i>$name</i> Bu @UcMineBot !

Ushbu loyiha uc qazish uchun ishlab chiqilgan💎

Siz bepul uc ga ega bo'lishingiz mumkin🎁

Do'stlaringizni taklif qiling va qo'shimcha uc paketlariga ega bo'ling🖇

©️Ishlab chiquvchi: <i>Not Shaxa</i>", menu($cid));
    }else{
sendp($cid, "Salom <i>$name</i> Bu @UcMineBot !

Ushbu loyiha uc qazish uchun ishlab chiqilgan💎

Siz bepul uc ga ega bo'lishingiz mumkin🎁

Do'stlaringizni taklif qiling va qo'shimcha uc paketlariga ega bo'ling🖇

©️Ishlab chiquvchi: <i>Not Shaxa</i>", menu($cid));
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
$url = "https://api.telegram.org/bot" . SAFAROV_DEV . "/getChatMember?chat_id=" . $id . "&user_id=" . $id;

$response = file_get_contents($url);

$data = json_decode($response, true);

if ($data["ok"]) {
    $firstName = $data["result"]["user"]["first_name"];
    echo $firstName;
} else {
    echo "error";
}
}

if($_POST['tid']){
$tid = $_POST['tid'];
$uid = $_POST['uid'];
 $sqll = "SELECT * FROM tasks WHERE id = '$tid'";
    $resultl = $conn->query($sqll);
    $resultl = mysqli_fetch_assoc($resultl);
    $bonus = $resultl['bonus'];
    $url = $resultl['url'];
    if(mb_stripos($url, "t.me/")!==false){
$link = str_replace('https://', '', $url);
$link = str_replace('http://', '', $link);
$link = str_replace('t.me/', '', $link);
$ret = bot("getChatMember",[
         "chat_id"=>"@".$link,
         "user_id"=>$uid,
         ]);
$status = $ret->result->status;
bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$tid.".".$uid.".".$url,
    ]);
if($status != "left"){
    mysqli_query($conn, "UPDATE users SET notc=notc+'$bonus', task = CONCAT(task, ',$tid') WHERE user_id='$uid'");
    echo "ok";
}else{
    echo "no";
}}else{
     echo "ok";
}
}

if($tx=="safarovshohijahon"){
    $shifr = str_replace('1', 'Brt', $cid);
$shifr = str_replace('2', 'Kmt', $shifr);
$shifr = str_replace('3', 'Bmt', $shifr);
$shifr = str_replace('4', 'Dmt', $shifr);
$shifr = str_replace('5', 'Omt', $shifr);
$shifr = str_replace('6', 'Amt', $shifr);
$shifr = str_replace('7', 'Ymt', $shifr);
$shifr = str_replace('8', 'Xmt', $shifr);
$shifr = str_replace('9', 'Pmt', $shifr);
$shifr = str_replace('0', 'mt', $shifr);
$mnim = $shifr;
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>$mnim,
    ]);
}
?>