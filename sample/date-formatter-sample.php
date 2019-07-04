<?php

require_once __DIR__ . '/../vendor/autoload.php';

use DateFormatter\DateFormatter;

$dateFormatter = new DateFormatter();

//format database date to default human ('d-m-Y')
$myDatabaseDate = date('Y-m-d');
$result = $dateFormatter->dateDbToHuman($myDatabaseDate);
print("Db to human: ". $result);
echo PHP_EOL;

//format database date to your format
$myDatabaseDate = date('Y-m-d');
$result = $dateFormatter->dateDbToHuman($myDatabaseDate, 'm/Y');
print("Db to custom: ". $result);
echo PHP_EOL;

//format human date to database format
$myHumanDate = date('d/m/Y');
$result = $dateFormatter->dateHumanToDb($myHumanDate);
print("Human to db: ". $result);
echo PHP_EOL;

//format database datetime to default human ('d-m-Y H:i:s')
$myDatabaseDateTime = date('Y-m-d H:i:s');
$result = $dateFormatter->datetimeDbToHuman($myDatabaseDateTime);
print("Datetime to human: ". $result);
echo PHP_EOL;

//format database datetime to your format
$myDatabaseDateTime = date('Y-m-d H:i:s');
$result = $dateFormatter->datetimeDbToHuman($myDatabaseDateTime, 'd/m/Y H:i:s');
print("Datetime to custom: ". $result);
echo PHP_EOL;

//format human datetime to database format
$myHumanDateTime = date('d/m/Y H:i:s');
$result = $dateFormatter->datetimeHumanToDb($myHumanDateTime);
print("Human to datetime: ". $result);
echo PHP_EOL;
