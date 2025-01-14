<?php 

require_once "vendor/autoload.php";

use Dio\DigitalCep\Search;

$a = new Search();

$r = $a->getAddresFromZipCode('05822010');

print_r($r);