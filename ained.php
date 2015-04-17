<?php
	$file_name = "ainekood_pohiandmed.json";
	$entries_from_file = file_get_contents($file_name);
	$entries = json_decode($entries_from_file);
	var_dump($entries);
?>