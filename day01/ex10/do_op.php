#!/usr/bin/php
<?php
if ($argc != 4)
	echo "Incorrect Parameters";
else
{
  $a = trim($argv[1]);
  $b = trim($argv[2]);
  $c = trim($argv[3]);
	if ($b == "+")
		print ($a + $c);
	if ($b == "-")
		print ($a - $c);
	if ($b == "*" || $b == "do_op.php")
		print ($a * $c);
	if ($b == "/")
		print ($a / $c);
	if ($b == "%")
		print ($a % $c);
}
echo "\n";
?>
