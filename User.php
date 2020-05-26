<?php

class User {

    public $username;
    public $password;
    public $email;
    public $contact;

    public function __construct($username, $password, $email, $contact = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->contact = $contact;
    }
}

?>