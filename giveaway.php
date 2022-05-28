<?php
$secured=true;
require 'include/config.php';
require 'include/functions.php';
require 'steamauth/steamauth.php';
if(isset($_SESSION['steamid'])) {
	require 'steamauth/userInfo.php'; //To access the $steamprofile array
}

$mysql=@new mysqli($db['host'],$db['user'],$db['pass'],$db['name']);

if($mysql->connect_errno)
{
	die('Database connection could not be established. Error number: '.$mysql->connect_errno);
}

require 'include/headerb.php';

?>
	<div class="fullWitchContent">
		<div class="title">GIVEAWAYS</div>
			<h1><center>We try our best to do monthly giveaways so stay tuned!</center></h1>
			<center><a href="https://steamcommunity.com/groups/csgoreborn" target="_blank"><img src="images/giveaway.jpg" style="width:861px;height:146px;"></center>
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/>
<!-- firefox height fix. no ragrets -->
</div>