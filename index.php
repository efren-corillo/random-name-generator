<?php
require_once 'vendor/autoload.php';

use Doublybear\RandomNameGenerator\RandomNameGenerator;

$class = new RandomNameGenerator;

print($class->generateWords());