#!/usr/bin/php
<?php
date_default_timezone_set("America/Los_Angeles");
$name1 = get_current_user();
$content = fopen("/var/run/utmpx", "r");
$final = array();
$typedef  = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
while ($s = fread($content, 628)) {
	$array = unpack($typedef, $s);
	if (strcmp(trim($array[user]), $name1) == 0 && $array[type] == 7)
	{
		$date = date("M  j H:i", $array["time1"]);
		$line = trim($array[line]);
		$name2 = trim($array[user]);
		$tab = array($name2. "  ".$line. "  ".$date);
		$final = array_merge($final, $tab);
	}
}
sort($final);
foreach ($final as $output)
	echo $output."\n";
?>
