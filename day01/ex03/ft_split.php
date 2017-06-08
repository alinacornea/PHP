<?php
function ft_split($data){
	$strings = preg_split('/\s+/', $data);
	sort($strings);
	return($strings);
}
?>
