#!/usr/bin/php
<?php
$value = $argv[1];
	$value = trim($value);
	$value = preg_replace('/\s+/', ' ', $value);
	if ($value != "")
		echo "$value\n";
?>
