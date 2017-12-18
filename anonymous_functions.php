<?php
interface Logger{
    public function log($message);
}

class PersonController implements Logger{
    
     public function log($message){
         var_dump($message);
     }

 }

class AnimalController {
        
        protected $logger;
        
            public function setLogger(Logger $logger){
                    $this->logger = $logger;
                    return $this;
            } 
            
            public function action(){
                $this->logger->log("logging information");
            }
        
        
        
        }

/**
 * Anonymous class set to implement the interface called logger
 */
        $app->setLogger(new class implements Logger{
            public function log($message){
                    var_dump($message);
            }
        });
        
        $app->action();