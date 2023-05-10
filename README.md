# How to install
```composer require doublybear/randomnamegenerator```
# Usage
```
<?php
require('../vendor/autoload.php');

use Doublybear\RandomNameGenerator\RandomNameGenerator;


$r = new RandomNameGenerator;

$name = $r->generateWords(); #random output: Playful Incredible Jalapeno
$slug = $r->generateSlug($name); #slugged outpout: playful-incredible-jalapeno
```
