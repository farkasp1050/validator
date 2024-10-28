<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Farkasp1050\Validator\Validator;

// Variables
$email = "farkas.patrik105@gmail.com";
$password = "iwonttellyou350";
$age = 21;
$sex = "male";

//Validations
echo Validator::isEmail($email) ? "Your email address is valid!\n" : "Your email address is not valid!\n";
echo Validator::isPasswordValid($password, 5, 10) ? "Your password is valid!\n" : "Your password is not valid!\n";
echo Validator::isAgeValid($age, 20) ? "You are 20 years old!\n" : "You are not 20 years old !\n";
echo Validator::isAgeBetween($age, 18, "22") ? "Your age is between 18 and 22!\n" : "Your age is not between 18 and 22!\n";
echo Validator::isAgeExactly($age, 18) ? "You are exactly 18 years old!\n" : "You are not 18 years old!\n";
echo Validator::isAgeNot($age, 10) ? "You are not 10 years old!\n" : "You are 10 years old !\n";
echo Validator::isSexValid($sex) ? "You are " . $sex . " which is valid!\n" : "You are " . $sex . " which is not valid!\n";