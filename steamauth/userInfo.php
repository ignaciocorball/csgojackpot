<?php
    if(!$_SESSION['steamid'] == ""){
    	include("$_SERVER[DOCUMENT_ROOT]/steamauth/settings.php");
        if (empty($_SESSION['steam_uptodate']) or $_SESSION['steam_uptodate'] == false or empty($_SESSION['steam_personaname'])) {
            @ $url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=".$steamauth['apikey']."&steamids=".$_SESSION['steamid']);
            if(!$url){
                //die('could not get api response');
            }
            $content = json_decode($url, true);
            $_SESSION['steam_steamid'] = $content['response']['players'][0]['steamid'];
            $_SESSION['steam_communityvisibilitystate'] = $content['response']['players'][0]['communityvisibilitystate'];
            $_SESSION['steam_profilestate'] = $content['response']['players'][0]['profilestate'];
            $_SESSION['steam_personaname'] = $content['response']['players'][0]['personaname'];
            $_SESSION['steam_lastlogoff'] = $content['response']['players'][0]['lastlogoff'];
            $_SESSION['steam_profileurl'] = $content['response']['players'][0]['profileurl'];
            $_SESSION['steam_avatar'] = $content['response']['players'][0]['avatar'];
            $_SESSION['steam_avatarmedium'] = $content['response']['players'][0]['avatarmedium'];
            $_SESSION['steam_avatarfull'] = $content['response']['players'][0]['avatarfull'];
            $_SESSION['steam_personastate'] = $content['response']['players'][0]['personastate'];
            if (isset($content['response']['players'][0]['realname'])) { 
    	           $_SESSION['steam_realname'] = $content['response']['players'][0]['realname'];
    	       } else {
    	           $_SESSION['steam_realname'] = "Real name not given";
            }
            $_SESSION['steam_primaryclanid'] = $content['response']['players'][0]['primaryclanid'];
            $_SESSION['steam_timecreated'] = $content['response']['players'][0]['timecreated'];
            $_SESSION['steam_uptodate'] = true;
        }
        $steamprofile['steamid'] = $_SESSION['steam_steamid'];
        $steamprofile['communityvisibilitystate'] = $_SESSION['steam_communityvisibilitystate'];
        $steamprofile['profilestate'] = $_SESSION['steam_profilestate'];
        $steamprofile['personaname'] = $_SESSION['steam_personaname'];
        $steamprofile['lastlogoff'] = $_SESSION['steam_lastlogoff'];
        $steamprofile['profileurl'] = $_SESSION['steam_profileurl'];
        $steamprofile['avatar'] = $_SESSION['steam_avatar'];
        $steamprofile['avatarmedium'] = $_SESSION['steam_avatarmedium'];
        $steamprofile['avatarfull'] = $_SESSION['steam_avatarfull'];
        $steamprofile['personastate'] = $_SESSION['steam_personastate'];
        $steamprofile['realname'] = $_SESSION['steam_realname'];
        $steamprofile['primaryclanid'] = $_SESSION['steam_primaryclanid'];
        $steamprofile['timecreated'] = $_SESSION['steam_timecreated'];

    }
	$cutnick=array(
            'CHALLENGE-SKINS.COM',
            'CSGOPULSE.COM',
			'CEBULO',
			'CSGODUCK',
            'csgoblackjack.com',
            'Csgodouble',
            'csgolike',
            'mycs.space',
            'csgodice',
			'pot4skins',
			'kickback',
            'csgodicegame',
            'skinfucker.com',
            'CSGODOUBLE.COM',
            'CSGOLoteria',
            'multispot.pl',
            'multispot',
            'double',
            'CSGOMORE',
            'LuckyShot',
            'csgoevo',
            'csjackpot',
            'csgobrawl.com',
            'csgoput',
            'SkinsProject',
            'goeventpro',
            'csgolow.pl',
            'csg0.com',
            'csgobig.com',
            'spin',
            'CSGOFunPot',
            'csgotry.net',
            'hellskins',
            'LOSCSGO.COM',
            'CSGOFROST.COM',
            'bestpot',
            'csdraw.com',
            'csgobestpot',
            'csgobestpot.com',
            'csgoskinwin.com',
            'csjackpot.pl',
            'CSGO777.com',
            'cswinner',
            'GOEZPOT',
            'csbetgo.',
            'csgoRamboPot.com',
            'CSWINPOT',
            'csgoegg.com',
            'skinhell',
            'Skinskings.eu',
            'hellskins',
            'shuffle',
            'csgocyrex',
            'skinoma',
            'hellskins',
			'CSGOCOOKIE',
			'CSGOECO',
			'CSGOskins',
			'csgoskins.',
			'CSGORAIN',
            'raffle',
            'csgojack',
            'ckickback',
			'SKINOMAT',
			'ez4',
			'skins',
			'skin4.pro',
			'skin4',
			'csbestgo',
			'csgo-gambler',
			'csfatpot',
			'csgoldpot',
			'dicegame.com',
			'csgofinish.com',
			'CSGOFinish.com',
			'csgoprism.com',
			'CSGOHandouts.com',
			'CSGOPULSE.com'
            );
			$steamprofile['personaname']=htmlspecialchars($steamprofile['personaname']);
			$steamprofile['personaname']=str_ireplace($cutnick, '✪', $steamprofile['personaname']);
			$steamprofile['personaname'] = str_replace("&","&amp;",$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace("'",".",$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace('"','.',$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace(';','.',$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace(':','.',$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace('~','.',$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace("{",'.',$steamprofile['personaname']);
            $steamprofile['personaname'] = str_replace("}",'.',$steamprofile['personaname']);
			$steamprofile['personaname'] = str_replace("/",'.',$steamprofile['personaname']);
			$steamprofile['personaname'] = str_replace("csgoreborn.tk","<b><font color=#ff0000>csgoreborn.tk</font></b>",$steamprofile['personaname']);
			
?>
    
