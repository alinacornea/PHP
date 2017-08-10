<?php
Class Tyrion
{
	public function sleepWith($person)
	{
		if ($person instanceof Jaime || $person instanceof Cersei)
		{
			echo "Not even if I'm drunk !\n";
		}
		else if ($person instanceof Sansa)
		{
			echo "Let's do this.\n";
		}
		return;
	}
}
?>
