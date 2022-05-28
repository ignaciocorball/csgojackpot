<?php
$adminslist=array(
		'76561198042582486', // ENTER ADMINS - STEAM64ID CAN BE GET THROUGH : * STEAMID.IO *
		''
	);

function isadmin($steamid)
{
	global $adminslist;
	if(in_array($steamid, $adminslist))
	{
		return true;
	}
	else
	{
		return false;
	}
}