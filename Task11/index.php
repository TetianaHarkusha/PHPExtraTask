<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task11\Directory;
use Task11\File;
use Task11\Tree;

$obj1 = new Directory(__DIR__);
$obj2 = new File($obj1->getName() . '\\index.php');
$tree = new Tree();

//creates objects of class Directory
echo "Створено об'єкт класу Directory <br>";
echo $obj1->getName() . ',  дата створення: ' . $obj1->getDate() . '<br><br>';

//creates objects of class File
echo "Створено об'єкт класу File <br>";
echo $obj2->getName() . ',  дата створення: ' . $obj2->getDate() . '<br><br><br>';

//finds the most common directory (or file) name in this directory
$res = $tree->mostCommonName($obj1);
echo "Найчастіше зустрічається ім'я файлу чи директорії в " . $obj1->getName() . ' : <br>';
echo $res['name'] . ' - ' . $res['count'] . ' разів <br><br>';

//creates this objects
echo "Створимо цей об'єкт: <br>";
$objName = $obj1->getName() . '\\' . $res['name'];
$obj3 = $tree->directoryOrFile($objName);
echo $obj3->getName() . ',  дата створення: ' . $obj3->getDate();
