<?php
class Users{
    private $name;
    private $surname;
    private $email;
    private $username;
    private $password;
    private $role;

    public function __construct($name,$surname,$email,$username,$password,$role){
        $this->name=$name;
        $this->surname=$surname;
        $this->email=$email;
        $this->username=$username;
        $this->password=$password;
        $this->role=$role;
    }
}


$user1=[
    "name" => "Anda",
    "surname" => "Pilingjurka",
    "email" => "andapilingjurka@gmail.com",
    "username" => "andapilingjurka",
    "password" => "anda123",
    "role" => "user"

];

$user2=[
    "name" => "Lorena",
    "surname" => "Troshupa",
    "email" => "lorenatroshupa@gmail.com",
    "username" => "lorenatroshupa",
    "password" => "lorena123",
    "role" => "user"

];

$user3=[
    "name" => "Venera",
    "surname" => "Goxhufi",
    "email" => "veneragoxhufi@gmail.com",
    "username" => "veneragoxhufi",
    "password" => "venera123",
    "role" => "admin"
];

$user4=[
    "name" => "Ermal",
    "surname" => "Salihaj",
    "email" => "ermalsalihaj@gmail.com",
    "username" => "ermalsalihaj",
    "password" => "ermal123",
    "role" => "admin"
];

$users=[$user1,$user2,$user3,$user4];







?>