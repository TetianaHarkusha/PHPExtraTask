<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task10\StringHelper;

$myString = "Hello";
$str = new StringHelper($myString);
$result = $str->toUpper(); // $result equal HELLO
$result1 = $str->toLower(); // $result equal hello
$result2 = $str->startsWith('STRING'); // equal false
$result21 = $str->startsWith('He'); // equal true
$result3 = $str->endWith('o'); // equal true
$result4 = $str->endWith('ttttt'); // equal false

var_dump($result);
var_dump($result1);
var_dump($result2);
var_dump($result21);
var_dump($result3);
var_dump($result4);
