!/usr/bin/php
<?php
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

$arr1 = $arr2 = $arr3 = array();

foreach($e as $val) {
  if (is_numeric($val))
    array_push($arr2, $val);
  // else if (mb_detect_encoding($val, 'ASCII', true) &&
  else if (ctype_alpha($val[0]))
    array_push($arr1, $val);
  else
    array_push($arr3, $val);

}

rsort($arr2, SORT_ASC);
usort($arr1, 'strnatcasecmp');
// natcasesort(natsort($arr1));

sort($arr3, SORT_ASC);


// foreach($arr2 as $val)
// 	echo "arr2: $val\n";
foreach($arr1 as $val)
	echo "arr1: $val\n";
// foreach($arr3 as $val)
// 	echo "arr3: $val\n";

$test = array_merge($arr1, $arr2);
$result = array_merge($test, $arr3);
foreach($result as $val)
	echo "$val\n";

?>
