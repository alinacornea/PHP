<?php
include_once('IFighter.class.php');
class NightsWatch
{
	private $arr = array();

	public function __construct()
	{
		$this->arr = array();
	}

	public function recruit( $person )
	{
		if ( $person instanceof IFighter )
		{
			array_push($this->arr, $person);
		}
	}

	public function fight()
	{
		foreach ( $this->arr as $person )
		{
			$person->fight();
		}
	}
}
?>
