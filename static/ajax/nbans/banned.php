<?php
$banlist=array(
		'',
		'',
		'',
		'',
		'',
	);

function ban($steamid)
{
	global $banlist;
	if(in_array($steamid, $banlist))
	{
		return true;
	}
	else
	{
		return false;
	}
}