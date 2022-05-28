<html id="page">
 <head>
<?php require_once 'steamauth/steamauth.php';
if(isset($_SESSION['steamid'])) {
	require_once 'steamauth/userInfo.php'; //To access thse $steamprofile array
}?>
	<!-- meta --><meta name="description" content="Csgo gambling site" />
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="description" content=""/>

	<title>CSGOREBORN</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script><script type="text/javascript" src="js/noty/packaged/jquery.noty.packaged.min.js"></script>
	<!-- jquery -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script> 
	

<script src="dist/sweetalert.min.js"></script> <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<!-- tipTip -->
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/tipTip/jquery.tipTip.js"></script>

	<!-- isotope -->
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/isotope/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/isotope/horizontal.js"></script>

	<!-- knob -->
	<!--[if IE]><script type="text/javascript" src="http://csgoreborn.tk/static/js/knob/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/knob/jquery.knob.min.js"></script>

	<!-- scrollbar -->
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/scrollbar/jquery.scrollbar.min.js"></script>
	
	<!-- particles.js 
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/particles/particles.min.js"></script>
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/particles/loadparticles.js"></script>
	-->
	<!-- pace -->
	<script type="text/javascript" src="http://csgoreborn.tk/static/js/pace/pace.min.js"></script>
	<script src='http://cdn.rawgit.com/admsev/jquery-play-sound/master/jquery.playSound.js'></script>
	<!-- roulette -->
	<!--<script type="text/javascript" src="http://csgo-tell.ru/static/js/roulette/roulette.min.js"></script>-->
	
	<!-- socket.io -->
	<script src="http://cdn.socket.io/socket.io-1.3.5.js"></script>

	<!-- -->
	<script type="text/javascript">
	$(document).ready(function(){
		$('[title]').tipTip({maxWidth:"350px"});
	    	$('.scrollbar-inner').scrollbar();
	});
    	</script>
		
	<script src="assets/scripts/jquery.mCustomScrollbar.js"></script>
	<script src="assets/scripts/jquery.sidr.js"></script>
	
	<script>
	$(document).ready(function(){
		$("#jackpotItems").mCustomScrollbar({
			axis:"x",
			autoHideScrollbar: true,
			theme: "minimal-dark",
			advanced:{autoExpandHorizontalScroll:true}
		});
		$(".rekt").mCustomScrollbar({
			autoHideScrollbar: true,
			theme: "minimal-dark",
		});
		$("#content").mCustomScrollbar({
			autoHideScrollbar: true,
			theme: "minimal-dark",
		});
		
	$("#mobNavToggle").sidr({
      name: 'sidr-right',
	  side: 'right',
      source: '.headerRightSide, #nav'
    });
	
	
	});
	</script>


<style>
	::-webkit-scrollbar {
    width: 6px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: #2dc748; 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: #057acd; 
}
</style>

<link rel="stylesheet" href="assets/css/23ef4891.vendor.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="http://csgoreborn.tk/static/css/tipTip.css"/>
	<link rel="stylesheet" type="text/css" href="http://csgoreborn.tk/static/css/pace.css"/>
	<link rel="stylesheet" type="text/css" href="assets/styles/main.css"/>
	<link href="assets/styles/main.css" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/animate.css">
	<link href="assets/animate.css" media="screen" rel="stylesheet" type="text/css">
	<link href="assets/styles/jquery.mCustomScrollbar.css" media="screen" rel="stylesheet" type="text/css">
	<link href="assets/styles/jquery.sidr.light.css" media="screen" rel="stylesheet" type="text/css">
	
	<!-- favicon(sss) --><style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
<!-- Histats.com  START (hidden counter)-->

<!-- Histats.com  END  -->
 </head>
 <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>


 <body id="sidebar">
 <style>
 .loader {
	position: relative;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 100000000000;
	background: url('assets/facebook.gif') 50% 50% no-repeat #1D2226;
}
</style>
 <div class="loader"></div>

 
 <!--<div id="particles-js" style="position:fixed;top:0;width:100%;height:100%;"></div>-->
 
 	<?php if(isset($_SESSION['steamid'])): ?>
	<div></div>
		<?php else: ?>
 <div ng-show="!user.authenticated" id="overlay" class="" style="">
    <div id="overlay-footer">
      <a target="_blank" href="http://twitter.com/csgoreborn">
        <i class="fa fa-twitter"></i>
      </a>
      </a>
      <a target="_blank" href="https://steamcommunity.com/groups/csgoreborn">
        <i class="fa fa-steam-square"></i>
      </a>
    </div>

    <div id="the-overlay-content">
      <div id="overlay-logo">
        <img src="images/llogo.png" style="width:100px;height:100px;">
        <p id="bottom-line">CSGO REBORN ULTIMATE GAMBLING</p>
      </div>
      <div>
		<a href="//csgoreborn.tk/?login"><img src="images/slogin.png" style="width:334px;height:50px;">
      </div>
      <div id="overlay-at-least">
        <div>
          <label>
            <p id="bottom-line">BY LOGGING IN YOU AGREE TO OUR TERMS OF SERVICE</p>
          </label>
        </div>
      </div>
      <div class="row" id="overlay-money">
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  	<?php endif; ?>
   <div id="header">
        <div id="mainHeader">
            <a href="http://csgoreborn.tk" id="logo"><img src="../images/logo.png" alt="logo" style="width: 250px;height: 79px;margin-top: 7px;"></a>
            <div id="nav" style="z-index:190000; position:relative;margin-left:-50px;" >
                <a href="http://csgoreborn.tk">Play</a>
                <a href="history.php">history</a>
                <a href="ranking.php">leaderboard</a>
				<a href="partners.php">partners</a>
				<a href="giveaway.php">giveaway</a>
				<!--
				<a href="1v1-arena.php">1V1 Arena</a>	<a href="1v1-history.php">1V1 History</a>
				-->
            </div>
        </div>
		<div id="mobNavToggle"></div>
        <div class="headerRightSide">
		<?php if(isset($_SESSION['steamid'])): ?>
							<div id="userPanel">
					<a href="settings.php" title="Edit Settings"><img src="<?=$steamprofile['avatarfull']?>" alt=""/></a>
					<div class="UserPanelInfo">
						<a href="settings.php" class="username"><?=$steamprofile['personaname'] ?></a>
						<a href="steamauth/logout.php" class="logout">LOGOUT FROM SITE</a> 
					</div>

				</div>
				<?php else: ?>
					<li class="login" style="
    top: 20px;
    position: relative;
    left: 56px;
	font-size:0.001px;
">
	<?=steamlogin()?>
	 </li>
	<?php endif; ?>
					</div>
		
    </div>
	
<script src="ajax/chat2.js"></script>

