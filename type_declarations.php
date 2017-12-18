<?php

/**
 * Return Type Declarations
 */

 //declare(strict_types = 1);
class someUser{

}

interface someInterface{
    public function something() : someUser;
}
class someClass implements someInterface{
    
    public function something(): someUser{
        return new someUser;
    }
    


var_dump((new someClass)->something());
