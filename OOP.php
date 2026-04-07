<?php

class User
{

    // public $name = "Mark";
    // public $email = "datusmarkandrie@gmailcoms";

    public $name; //properties
    private $email;
    public $friendrequest;
    public function __construct($name, $email, $friendrequest) //constructor for dynamic
    {
        $this->name = $name;
        $this->email = $email;
        $this->friendrequest = $friendrequest;
    }

    public function getEmail() //getters
    {
        return $this->email;
    }

    public function setemail($email) //setters updating 45 to valid email
    {
        $emailregex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
        if (!preg_match($emailregex, $email)) {
            echo "not an Email";
        } else {

            echo $this->email = $email . '<br>';
        }
    }

    public function addfriend() //methods just like a functions
    {
        return "$this->email sent an friend request to $this->friendrequest";
    } //methods 

}

class AdminUser extends User{ //inheriting user properties

        public $adminrole; //acces modifiers

        public function __construct($name, $email, $friendrequest, $adminrole)
        {
            $this->adminrole = $adminrole;
            parent::__construct($name, $email, $friendrequest);
            
        }

        public function getrole(){
           echo "role: $this->adminrole <br>";

        }

}



//instanciation creating instanciation

$newUserOne = new User('Mark Andrie Datus', '43', 'Elmira Labarnes');
$newAdminUser = new AdminUser('Linux Torvalds', 'linux@thegnu@linux.com', 'Mark Andrie Datus', 'Administrator');

//invoking calling and pasing data to a class 

echo $newUserOne->addfriend() . '<br>';
echo $newUserOne->setemail('datusmarkandrie@gmail.com');
echo $newAdminUser->name ;
echo '<br>';
echo $newAdminUser->getEmail();
echo '<br>';
echo $newAdminUser->getrole();

//access a value in a class changing manually 
// echo $newUserOne->name . '<br>';
// echo $newUserOne->email . '<br>';

// $newUserTwo->name = "Mira";
// $newUserTwo->email = "labarneselmira@gmail.com";

// echo $newUserTwo->name . '<br>';
// echo $newUserTwo->email . '<br>';