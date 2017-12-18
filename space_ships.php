<?php
/**
 * SAPCESHIPS
 */

//getter and setter class
class User{
    protected  $name;
    protected  $age;

    public function __construct($name, $age){
           $this->name = $name;
           $this->age = $age; 
    }

    public function setName($name){
            $this->name = $name;
    }

    public function getName(){
            return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
}

    public function getAge(){
        return $this->age;
}
}



//sorting class
class UserCollection{
    protected $users;

    public function __construct(array $users){
        $this->users[] = $users;
    }

    public function sortBy($property){
        usort($this->users, function($userOne, $userTwo) use ($property){
                return $userOne->$property() <=> $userTwo->$property();
        });

        return $this->users;
      
    }

    public function getUsers(){
        return $this->users;
    }


/**
 * Sort in Alphabetical order
 */
    public function sort_in_asc(){
        $games = ['Mass effect', 'Super mario bros', 'Zelda', 'Fallout', 'Metal gear'];
       
        //Hence the space ship like operator
        return  usort($games, function($k, $v){
           var_dump('k: '. $k, 'v: '. $v ); 
           //$k <=> $v;
           //sorting by the number of characters
           return strlen($k) <=> strlen($v);
         }
        );
        
    }
}

}

$collection = new UserCollection([
    new User('Jeff', 30),
    new User('Tyler', 24),
    new User('Kimble', 35),
    new User('Ulan', 19)
]);

$collection->sortBy('name');
print_r($collection->getUsers());
var_dump((new someClass)->sort_in_asc());