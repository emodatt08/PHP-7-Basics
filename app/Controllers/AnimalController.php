<?php

namespace App\Controllers;

use App\Controllers\PersonController;

class AnimalController extends PersonController{

    protected $logger;

    public function setLogger(Logger $logger){
            $this->logger = $logger;
            return $this;
    } 
    
    public function action(){
        $this->logger->log("logging information");
    }



}