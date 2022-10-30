<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task11\Directory;
use Task11\File;

$obj1 = new Directory('C:\OSPanel\domains\PHPOOP', '29.09.2022');
$obj2 = new Directory('C:\Terminal', '31.01.2020');

var_dump($obj1->mostCommonName($obj1));