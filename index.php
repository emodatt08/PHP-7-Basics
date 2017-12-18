<?php



require 'vendor/autoload.php';
/**
 * grouped imports
 */
use App\Controllers\{PersonController, AnimalController};


use App\Interfaces\Logger;
$app = new AnimalController();

$app = new AnimalController();

$app->setLogger(new PersonController);

$app->action();        


