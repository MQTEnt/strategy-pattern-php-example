<?php
require_once(__DIR__."/quack-behavior.php");
class Quaaack implements QuackBehavior {
	public function quack() {
		echo "Quaaack... \n";
	}
}
?>