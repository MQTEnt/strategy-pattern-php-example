<?php
require_once(__DIR__."/duck.php");
require_once(__DIR__."/queeeck.php");
require_once(__DIR__."/fly-no-way.php");
class FakeDuck extends Duck {
	public function __construct() {
		$this->quackBehavior = new Queeeck();
		$this->flyBehavior = new FlyNoWay();
	}
	public function display() {
		echo "Look like a fake duck! \n";
	}
}
?>