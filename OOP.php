<?php


class User
{

    // public $name = "Mark";
    // public $email = "datusmarkandrie@gmailcoms";

    public $name; //properties
    public $email;
    public $friendrequest;

    public function __construct($name, $email, $friendrequest)
    {
        $this->name = $name;
        $this->email = $email;
        $this->friendrequest = $friendrequest;
    }

    public function addfriend()
    {
        return "$this->name sent an friend request to $this->friendrequest";
    } //methods 
}



//instanciation

$newUserOne = new User('Mark Andrie Datus', 'datusmarkandrie@gmail.com', 'Elmira Labarnes');


echo $newUserOne->addfriend();
//access a value in a class changing manually 
// echo $newUserOne->name . '<br>';
// echo $newUserOne->email . '<br>';

// $newUserTwo->name = "Mira";
// $newUserTwo->email = "labarneselmira@gmail.com";

// echo $newUserTwo->name . '<br>';
// echo $newUserTwo->email . '<br>';