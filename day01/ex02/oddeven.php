#!/usr/bin/php
<?php
echo "Enter a number: ";
$stdin = fopen ('php://stdin', 'r');
while(1)
{
	$var = fgets($stdin);
	$line = trim($var);
	if ($var[0] != "0" && !$line)
	{
		echo "^D\n";
		exit ();
	}
	if (!is_numeric($line))
		echo "'$line' is not a number\n";
	else{
		if ($line % 2 == 0)
			echo "The number $line is even\n";
		else
			echo "The number $line is odd\n";
	}
	echo "Enter a number: ";
  }
?>
