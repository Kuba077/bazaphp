<?php

function init_baza() {
	global $db, $dbfile, $kom;
	if (!file_exists($dbfile))
		$kom[] = 'Brak pliku bazy';
	$db = new PDO("sqlite:$dbfile");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

?>