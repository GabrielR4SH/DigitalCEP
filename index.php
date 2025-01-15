<?php 

require_once "vendor/autoload.php";

use Dio\DigitalCep\Search;

$search = new Search();

$res_json = $search->getAddresFromZipCode('05822010');

print_r($res_json);
