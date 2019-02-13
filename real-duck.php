<?php
require_once(__DIR__."/duck.php");
require_once(__DIR__."/quaaack.php");
require_once(__DIR__."/fly-with-wings.php");
class RealDuck extends Duck {
	public function __construct() {
		$this->quackBehavior = new Quaaack();
		$this->flyBehavior = new FlyWithWings();
	}
	public function display() {
		echo "Look like a real duck! \n";
	}
}
?>