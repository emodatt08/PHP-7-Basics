<?php
namespace App\Controllers;
use App\Interfaces\Logger;

class PersonController implements Logger{
   
    public function log($message){
        var_dump($message);
    }



}