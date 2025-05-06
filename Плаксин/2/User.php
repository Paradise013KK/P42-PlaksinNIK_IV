<?php

class User {
    private $username;
    private $password;
    private $birthday;

    public function __construct(string $username, string $password, DateTime $birthday) {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = $birthday;
    }

    public function getUsername(): string 
    {
        return $this->username;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getBirthday(): DateTime {
        return $this->birthday;
    }
}
