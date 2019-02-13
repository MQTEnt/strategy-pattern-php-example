<?php
require_once(__DIR__."/quack-behavior.php");
class Queeeck implements QuackBehavior {
	public function quack() {
		echo "Queeeck... \n";
	}
}
?>