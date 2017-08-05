<?php

$newpwd = $_POST["newpw"];
$oldpwd = $_POST["oldpw"];

if ($_POST["submit"] === "OK")
{
		$pass = hash('whirlpool', $newpwd);
		$old_pass = hash("whirlpool", $oldpwd);

		$flag = false;
		$string = file_get_contents("../private/passwd");
		$check = unserialize($string);
		$i = 0;
		foreach ($check as $value)
		{
			if ($value['login'] === $_POST['login'] && $old_pass === $value['passwd'])
			{
				$check[$i]['passwd'] = $pass;
				file_put_contents("../private/passwd", serialize($check));
				echo "OK\n";
				$flag = true;
			}
			$i++;
		}
		if ($flag == false)
			echo "ERROR\n";
}
else {
	echo "ERROR\n";
}

?>
