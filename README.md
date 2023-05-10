# How to install
```composer require doublybear/randomnamegenerator```
# Usage
```use Doublybear\RandomNameGenerator\RandomNameGenerator;

$r = new RandomNameGenerator;

$name = $r->generateWords(); #output: Playful Incredible Jalapeno
$slug = $r->generateSlug($name); #outpout: playful-incredible-jalapeno
```
