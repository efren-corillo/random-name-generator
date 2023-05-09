# Usage
use Doublybear\RandomNameGenerator\RandomNameGenerator;


$r = new RandomNameGenerator;

$name = $r->generateWords();
$slug = $r->generateSlug($name);