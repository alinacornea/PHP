#!/usr/bin/php
<?php
function ft_split($data){
	$s = preg_split('/\s+/', $data, -1, PREG_SPLIT_NO_EMPTY);
	return ($s);
}
$e = array();
foreach($argv as $value){
	if($value != $argv[0])
	{
		$s = ft_split($value);
		$e = array_merge($e, $s);
	}
}
sort($e);
foreach($e as $tab)
	echo "$tab\n";
?>
