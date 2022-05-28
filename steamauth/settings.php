<?php
$steamauth['apikey'] = 'BOT APIKEY'; // Your Steam WebAPI-Key found at http://steamcommunity.com/dev/apikey
//http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=CE63CF9DEC62BB456E10A6A0CF24DDF7&steamids=76561198065442521
$steamauth['domainname'] = "http://csgoreborn.tk"; // The main URL of your website displayed in the login page
$steamauth['buttonstyle'] = "large_border"; // Style of the login button [small|large_no|large]
$steamauth['logoutpage'] = ""; // Page to redirect to after a successfull logout (from the directory the SteamAuth-folder is located in) - NO slash at the beginning! You should probably leave it empty.
$steamauth['loginpage'] = ""; // Page to redirect to after a successfull login (from the directory the SteamAuth-folder is located in) - NO slash at the beginning! You should probably leave it empty.

// System stuff
if (empty($steamauth['apikey'])) {die("<div style='display: block; width: 100%; background-color: red; text-align: center;'>SteamAuth:<br>Please supply an API-Key!</div>");}
if (empty($steamauth['domainname'])) {$steamauth['domainname'] = "localhost";}
if ($steamauth['buttonstyle'] != "small" and $steamauth['buttonstyle'] != "large") {$steamauth['buttonstyle'] = "large_no";}
?>