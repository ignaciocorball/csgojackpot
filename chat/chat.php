<?php 
session_start();
include ('/steamauth/userInfo.php');
if(isset($_SERVER['http_X_REQUESTED_WITH']) && !empty($_SERVER['http_X_REQUESTED_WITH']) && strtolower($_SERVER['http_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $today = date("H:i:s | d.m.Y");
if ($_POST['massage'] == '') {
    die('Error, message cant be empty.');
}
if (strlen($_POST['massage']) < 2) {
    die('Error, message cant contain less than 2 chars.');
}
if (strlen($_POST['massage']) > 100) {
    die('Error, message cant contain more than 50 chars.');
}
if(!isset($_SESSION['steamid'])) {
echo 'Error, cookies expired, please relog to the site.';
}

else {
    $massage = $_POST['massage'];
	$steamprofile['personaname']=str_ireplace($cutnick, '✪', $steamprofile['personaname']);
	$steamprofile['personaname'] = str_ireplace('script', '', $steamprofile['personaname']);
    $massage = str_ireplace('iframe', '*', $massage);
	$massage = str_ireplace('leaked', 'unique', $massage);
    $massage = str_ireplace('script', '*', $massage);
    $massage = str_ireplace('src', '*', $massage);
    $massage = str_ireplace('>', '*', $massage);
    $massage = str_ireplace('<', '*', $massage);
    $massage = str_ireplace('/', '*', $massage);
	$massage = str_ireplace('http:', '*', $massage);
	$massage = str_ireplace('http', '*', $massage);
	$massage = str_ireplace('https:', '*', $massage);
	$massage = str_ireplace('https', '*', $massage);
    $massage = str_ireplace('www', '*', $massage);
    $massage = str_ireplace('.com', '*', $massage);
    $massage = str_ireplace('.org', '*', $massage);
    $massage = str_ireplace('csgobig.com', '*', $massage);
    $massage = str_ireplace('csgolegal.com', '*', $massage);
    $massage = str_ireplace('allahu akbar', '*', $massage);
    $massage = str_ireplace('9/11', '*', $massage);
    $massage = str_ireplace('hitler', '*', $massage);
    $massage = str_ireplace('nazi', '*', $massage);
    $massage = str_ireplace('faggot', '*', $massage);
    $massage = str_ireplace('aids', '*', $massage);
    $massage = str_ireplace('cyka', '*', $massage);
	$massage = str_ireplace('blyat', '*', $massage);
	$massage = str_ireplace('kurwa', '*', $massage);
    $massage = str_ireplace('whore', '*', $massage);
	$massage = str_ireplace('bitch', '*', $massage);
	$massage = str_ireplace('cunt', '*', $massage);
    $massage = str_ireplace('&#60;', '*', $massage);
    $massage = str_ireplace('&#62;', '*', $massage);
	$massage = str_ireplace('lenny', '( ͡° ͜ʖ ͡°)', $massage);
    $massage = str_ireplace('scam', 'imgay', $massage);
    $massage = str_ireplace('scammed', 'imgay', $massage);
	$massage = str_ireplace('scammer', 'imgay', $massage);
	$massage = str_ireplace('scammers', 'imgay', $massage);
	
$massage =str_replace("doge","<img style='background:none;' id=smile src=/styles/images/chat/doge.png>",$massage);	
$massage =str_replace("Doge","<img style='background:none;' id=smile src=/styles/images/chat/doge.png>",$massage);
$massage =str_replace("DOGE","<img style='background:none;' id=smile src=/styles/images/chat/doge.png>",$massage);
$massage =str_replace("fail","<img style='background:none;' id=smile src=/styles/images/chat/fail.png>",$massage);
$massage =str_replace("Fail","<img style='background:none;' id=smile src=/styles/images/chat/fail.png>",$massage);
$massage =str_replace("FAIL","<img style='background:none;' id=smile src=/styles/images/chat/fail.png>",$massage);
$massage =str_replace("lol","<img style='background:none;' id=smile src=/styles/images/chat/lol.png>",$massage);
$massage =str_replace("Lol","<img style='background:none;' id=smile src=/styles/images/chat/lol.png>",$massage);
$massage =str_replace("LOL","<img style='background:none;' id=smile src=/styles/images/chat/lol.png>",$massage);
$massage =str_replace("happy","<img style='background:none;' id=smile src=/styles/images/chat/happy.png>",$massage);
$massage =str_replace("Happy","<img style='background:none;' id=smile src=/styles/images/chat/happy.png>",$massage);
$massage =str_replace("HAPPY","<img style='background:none;' id=smile src=/styles/images/chat/happy.png>",$massage);
$massage =str_replace("kappa","<img style='background:none;' id=smile src=/styles/images/chat/kappa.png>",$massage);
$massage =str_replace("Kappa","<img style='background:none;' id=smile src=/styles/images/chat/kappa.png>",$massage);
$massage =str_replace("KAPPA","<img style='background:none;' id=smile src=/styles/images/chat/kappa.png>",$massage);
$massage =str_replace("knife","<img style='background:none;' id=smile src=/styles/images/chat/knife.png>",$massage);
$massage =str_replace("Knife","<img style='background:none;' id=smile src=/styles/images/chat/knife.png>",$massage);
$massage =str_replace("KNIFE","<img style='background:none;' id=smile src=/styles/images/chat/knife.png>",$massage);
$massage =str_replace("rekt","<img style='background:none;' id=smile src=/styles/images/chat/rekt.png>",$massage);
$massage =str_replace("Rekt","<img style='background:none;' id=smile src=/styles/images/chat/rekt.png>",$massage);
$massage =str_replace("REKT","<img style='background:none;' id=smile src=/styles/images/chat/rekt.png>",$massage);
$massage =str_replace("rigged","<img style='background:none;' id=smile src=/styles/images/chat/rigged.png>",$massage);
$massage =str_replace("Rigged","<img style='background:none;' id=smile src=/styles/images/chat/rigged.png>",$massage);
$massage =str_replace("RIGGED","<img style='background:none;' id=smile src=/styles/images/chat/rigged.png>",$massage);
$massage =str_replace("rip","<img style='background:none;' id=smile src=/styles/images/chat/rip.png>",$massage);
$massage =str_replace("Rip","<img style='background:none;' id=smile src=/styles/images/chat/rip.png>",$massage);
$massage =str_replace("RIP","<img style='background:none;' id=smile src=/styles/images/chat/rip.png>",$massage);
$massage =str_replace("sad","<img style='background:none;' id=smile src=/styles/images/chat/sad.png>",$massage);
$massage =str_replace("Sad","<img style='background:none;' id=smile src=/styles/images/chat/sad.png>",$massage);
$massage =str_replace("SAD","<img style='background:none;' id=smile src=/styles/images/chat/sad.png>",$massage);
$massage =str_replace("shit","<img style='background:none;' id=smile src=/styles/images/chat/shit.png>",$massage);
$massage =str_replace("Shit","<img style='background:none;' id=smile src=/styles/images/chat/shit.png>",$massage);
$massage =str_replace("SHIT","<img style='background:none;' id=smile src=/styles/images/chat/shit.png>",$massage);
$massage =str_replace("snipe","<img style='background:none;' id=smile src=/styles/images/chat/snipe.png>",$massage);
$massage =str_replace("Snipe","<img style='background:none;' id=smile src=/styles/images/chat/snipe.png>",$massage);
$massage =str_replace("SNIPE","<img style='background:none;' id=smile src=/styles/images/chat/snipe.png>",$massage);
$massage =str_replace("thug","<img style='background:none;' id=smile src=/styles/images/chat/thug.png>",$massage);
$massage =str_replace("Thug","<img style='background:none;' id=smile src=/styles/images/chat/thug.png>",$massage);
$massage =str_replace("THUG","<img style='background:none;' id=smile src=/styles/images/chat/thug.png>",$massage);
$massage =str_replace("troll","<img style='background:none;' id=smile src=/styles/images/chat/troll.png>",$massage);
$massage =str_replace("Troll","<img style='background:none;' id=smile src=/styles/images/chat/troll.png>",$massage);
$massage =str_replace("TROLL","<img style='background:none;' id=smile src=/styles/images/chat/troll.png>",$massage);

$file = 'chat.txt';
if ($steamprofile['steamid'] == '') {
    $massage = '<font color="#D2303D"><i>'.$massage.'</i></font>';
}
if ($steamprofile['steamid'] == '') {
    $massage = '<font color="#cc883c"><i>'.$massage.'</i></font>';
}
if ($steamprofile['steamid'] == '') {
    $massage = '<font color="#D2303D"><i>'.$massage.'</i></font>';
}

// Новый человек, которого нужно добавить в файл
$person = '<div class="chat-msg">
            <div class="caht-ava"><img src="'.$steamprofile['avatarmedium'].'" width="30px"></div>
            <div class="caht-name"><a href="'.$steamprofile['profileurl'].'" target="_blank">'.$steamprofile['personaname'].'</a></div>
            <div class="msg-text">'.$massage.'</div>
        </div>';
// Пишем содержимое в файл,
// используя флаг FILE_APPEND flag для дописывания содержимого в конец файла
// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
}
    exit;
}


 ?>
