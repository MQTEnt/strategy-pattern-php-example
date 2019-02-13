<?php
require_once(__DIR__."/fly-behavior.php");
class FlyNoWay implements FlyBehavior {
	public function fly() {
		echo "Fly no way... \n";
	}
}
?>