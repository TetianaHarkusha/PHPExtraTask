<?php

require_once __DIR__ . '/../vendor/autoload.php'; //connect autoload

use Task14\Employee;
use Task14\User;
use Task14\City;
use Task14\ObjectsCollection;

//use Task14\PrintCollection;

//created objects of class ObjectsCollection and added objects of class User, Employee and City to it
$objectsCollection = new ObjectsCollection();
$objectsCollection->add(new Employee('Bob', 'Dylan', 2500));
$objectsCollection->add(new City('Poltava', 280000));
$objectsCollection->add(new City('Kharkov', 1420000));
$objectsCollection->add(new User('Sarah', 'Adams'));
$objectsCollection->add(new User('Jack', 'Brooks'));
$objectsCollection->add(new User('Maria', 'Day'));
$objectsCollection->add(new Employee('Anna', 'Brown', 3000));
$objectsCollection->add(new Employee('Edward', 'Smit', 2000));
$objectsCollection->add(new City('Sumy', 260000));
echo "Створено об'єкт класу ObjectsCollection: <br><br>";
print_r($objectsCollection->get());

//used method class ObjectsCollection
//printed objects names of class User or its children class
echo "<br><br>Імена об'єктів класу User або нащадків цього класу: <br>";
echo $objectsCollection->getUserNames();

//printed objects names that are not in class User
echo "<br>Імена об'єктів, які не належать до класу User або його нащадка: <br>";
echo $objectsCollection->getNotUserNames();

//printed objects names of class User and not its children class
echo "<br>Імена об'єктів класу User без нащадків: <br>";
echo $objectsCollection->getOnlyUserNames();
