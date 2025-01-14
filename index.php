<?php 

require_once "vendor/autoload.php";

use Dio\DigitalCep\Search;

$search = new Search();

$res_json = $a->getAddresFromZipCode('05822010');

print_r($res_json);