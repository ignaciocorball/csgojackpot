<?php
$sitebanlist=array(
		'',
		'',
		'',
		'',
		'',
	);

function siteban($steamid)
{
	global $sitebanlist;
	if(in_array($steamid, $sitebanlist))
	{
		return true;
	}
	else
	{
		return false;
	}
}