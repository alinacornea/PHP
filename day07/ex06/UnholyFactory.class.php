<?PHP
include_once('Fighter.class.php');
class UnholyFactory {
	private $_absorb;
	function __construct() {
		$this->_absorb = array();
	}
	function absorb($var) {
		if ( $var instanceof Fighter ) {
			if ( $this->_hasAbsorbed( $var ) ) {
				print( '(Factory already absorbed a fighter of type '
					   . $var . ')' . PHP_EOL );
			} else {
				$this->_absorb[] = $var;
				print( '(Factory absorbed a fighter of type ' . $var
					   . ')' . PHP_EOL );
			}
		} else {
			print( "(Factory can't absorb this, it's not a fighter)"
				   . PHP_EOL);
		}
	}
	private function _hasAbsorbed($value) {
		foreach ( $this->_absorb as $fighter ) {
			if ( $value == $fighter ) {
				return True;
			}
		}
		return False;
	}
	function fabricate($name) {
		foreach ($this->_absorb as $fighter) {
			if ($fighter->name === $name) {
				print( "(Factory fabricates a fighter of type " . $fighter
					   . ")" . PHP_EOL );
				return clone $fighter;
			}
		}
		print( "(Factory hasn't absorbed any fighter of type " . $name
			   . ")" . PHP_EOL );
		return null;
	}
}
?>
