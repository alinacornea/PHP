<?php
function ft_split($data){
	$strings = preg_split('/\s+/', $data, -1, PREG_SPLIT_NO_EMPTY);
	sort($strings);
	return($strings);
}
?>
