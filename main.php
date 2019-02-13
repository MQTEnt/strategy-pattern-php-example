<?php
require_once(__DIR__."/real-duck.php");
require_once(__DIR__."/fake-duck.php");

$realDuck = new RealDuck();
$fakeDuck = new FakeDuck();

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