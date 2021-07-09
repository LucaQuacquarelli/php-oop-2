<?php 
require_once __DIR__ . "/Person.php";

class User extends Person {
    protected $username;
    protected $init;
    protected $email;
    protected $password;

    function __construct($username, $init, $email, $password) {
        $this->username = $username;
        $this->init = $init;
        $this->email = $email;
        $this->password = $password;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getInit() {
        return $this->init;
    }

    public function getEmail() {
        return $this->email;
    }

}
