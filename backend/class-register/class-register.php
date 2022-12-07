<?php
class User{
    private $firstName;
    private $lastName;
    private $newEmail;
    private $newPassword;
    private $confirmPassword;

    public function __construct($ho, $ten, $email, $password,$xnPassword){
        $this->firstName =$ho;
        $this->lastName =$ten;
        $this->newEmail =$email;
        $this->newPassword =$password;
        $this->confirmPassword =$xnPassword;
    }
    function getFirstName(){
        return $this->firstName;
    }
    function getLastName(){
        return $this->lastName;
    }
    function getNewEmail(){
        return $this->newEmail;
    }
    function getNewPassword(){
        return $this->newPassword;
    }
    function getConfirmPassword(){
        return $this->confirmPassword;
    }
    function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    function setLastName($lastName){
        $this->lastName = $lastName;
    }
    function setNewEmail($newEmail){
        $this->newEmail = $newEmail;
    }
    function setNewPassword($newPassword){
        $this->newPassword = $newPassword;
    }
    function setConfirmPassword($confirmPassword){
        $this->confirmPassword = $confirmPassword;
    }
}