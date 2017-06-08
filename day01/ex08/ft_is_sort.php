<?php
function	ft_is_sort($tab)
{
	$count = count($tab);
	$arr = $tab;
	sort($tab);
	$i = 0;
	while ($i != $count)
	{
		if ($arr[$i] != $tab[$i])
			return FALSE;
		$i++;
	}
	return TRUE;
}
?>
