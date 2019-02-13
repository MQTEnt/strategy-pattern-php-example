<?php
require_once(__DIR__."/fly-behavior.php");
class FlyWithWings implements FlyBehavior {
	public function fly() {
		echo "Fly fly fly... \n";
	}
}
?>