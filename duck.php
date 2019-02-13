<?php
abstract class Duck {
    protected $quackBehavior;
	protected $flyBehavior;
    /*
	public function __construct($inFlyBehavior, $inQuackBehavior) {
		$this->quackBehavior = $inQuackBehavior;
        $this->flyBehavior = $inFlyBehavior;
    }
    */
    public function swim() {
    	echo "Swimming... \n";
    }
    public function fly() {
    	$this->flyBehavior->fly();
    }
    public function quack() {
    	$this->quackBehavior->quack();
    }
    abstract public function display();
}
?>