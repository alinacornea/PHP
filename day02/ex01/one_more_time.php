#!/usr/bin/php
<?php
date_default_timezone_set('Europe/Paris');
$days = "[Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche";
$months = "[Jj]anvier|[Ff]evrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]out|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd]ecembre";
$format = "[0-2][0-9]):([0-5][0-9]):([0-5][0-9]";
if (preg_match("/^($days) ([1-3]?[0-9]) ($months) ([0-9]{4}) ($format)$/", $argv[1], $date))
{
	$var[janvier]=1;
	$var[fevrier]=2;
	$var[mars]=3;
	$var[avril]=4;
	$var[mai]=5;
	$var[juin]=6;
	$var[juillet]=7;
	$var[aout]=8;
	$var[septembre]=9;
	$var[octobre]=10;
	$var[novembre]=11;
	$var[decembre]=12;
	$month = $var[strtolower($date[3])];
	echo mktime($date[5], $date[6], $date[7], $month, $date[2], $date[4])."\n";
}
else
	echo "Wrong Format\n";
?>
