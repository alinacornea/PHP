#!/usr/bin/php
<?php

$str = preg_split('/\s+/', $argv[1], -1, PREG_SPLIT_NO_EMPTY);
$s = implode($str);
$i = 0;
while ($s[$i])
{
  if ($s[$i] == '-' || $s[$i] == '+' || $s[$i] == '*' || $s[$i] == '/')
  {
    $b = $s[$i];
    break;
  }
  $i++;
}

$r = preg_split('/[*+\/-]/',  $s);


foreach($r as $val)
{
  if (is_numeric($val))
  {
    $a = $r[0];
    $c = $r[1];
  }
  else
  {
    echo "Syntax Error\n";
    exit(1);
  }
}

if ($argc != 2)
	echo "Incorrect Parameters";
else
{
	if ($b == "+")
		print ($a + $c);
	if ($b == "-")
		print ($a - $c);
	if ($b == "*")
		print ($a * $c);
	if ($b == "/")
		print ($a / $c);
	if ($b == "%")
		print ($a % $c);
}
echo "\n";
?>
