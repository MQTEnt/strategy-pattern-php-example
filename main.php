<?php
require_once(__DIR__."/real-duck.php");
require_once(__DIR__."/fake-duck.php");
require_once(__DIR__."/quaaack.php");
require_once(__DIR__."/queeeck.php");
require_once(__DIR__."/fly-with-wings.php");
require_once(__DIR__."/fly-no-way.php");

$realDuck = new RealDuck(new Quaaack(), new FlyWithWings());
$fakeDuck = new FakeDuck(new Queeeck(), new FlyNoWay());

echo "realDuck actions: \n";
$realDuck->display();
$realDuck->quack();
$realDuck->fly();
$realDuck->swim();
echo "\n\n\n";
echo "fakeDuck actions: \n";
$fakeDuck->display();
$fakeDuck->quack();
$fakeDuck->fly();
$fakeDuck->swim();
?>