<?php
	$file_name = "ained_full.json";
	$entries_from_file = file_get_contents($file_name);
	$entries = json_decode($entries_from_file);
	var_dump($entries);
?>