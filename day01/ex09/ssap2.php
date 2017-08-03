#!/usr/bin/php
<?php

function help($s1, $s2)
{
	if (!ctype_alpha($s1) && ctype_alpha($s2))
		return 1;
	else if (ctype_alpha($s1) && !ctype_alpha($s2))
		return -1;
	else if (!is_numeric($s2) && is_numeric($s1))
		return -1;
	else if (is_numeric($s2) && !is_numeric($s1))
		return 1;
	else
		return strcmp($s1, $s2);

}
function cmp($s1, $s2)
{
	$i = 0;
	$s1 = strtolower($s1);
	$s2 = strtolower($s2);
	while ($s1[$i] || $s2[$i])
	{
		$res = help($s1[$i], $s2[$i]);
		if ($s2[$i] && !$s1[$i])
			return -1;
		if ($res)
			return $res;
		$i++;
	}
	return $res;
}

function ft_split($data){
	$s = preg_split('/\s+/', $data);
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

usort($e, "cmp");

foreach($e as $val)
	echo "$val\n";
?>
