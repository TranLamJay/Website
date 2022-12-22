<?php
include_once "../Util/ConnectDB.php";
class UserModel{

    private $username;  
    private $email;
    private $password;
    
    public function __construct($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function setUsername($username){
        $this->username = $username;    
    }
    public function getUsername(){
        return $this->username;
    }
    public function setEmail($email){
        $this->email = $email;    
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function getPassword(){
        return $this->password;
    }

    public function insertData() {
        $dbCon = new ConnectDb("","","","");
        $data = [
            'name' => $this->username,
            'email' => $this->email,
            'password' => $this->password
        ];
        $sql = "INSERT INTO user(name,email, password) VALUES (:name,:email, :password)";
        $dbCon->insertData($sql, $data);
    }

    public function getAllUser(){
        $dbCon = new ConnectDb("","","","");
        $query = "SELECT * FROM user";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnected();
        return $data;
    }

    public function getData() {
        $dbCon = new ConnectDb("","","","");
        $sql = "SELECT * FROM user WHERE email=:email";
        $data = ['email' => $this->email];
        return $dbCon->getData($sql, $data);
    }

    public function deleteUser($username) {
        $dbCon = new ConnectDb("","","","");
        $data = [
            'username' => $username
        ];
        $sql = "DELETE FROM user WHERE username=:username";
        $dbCon->deleteData($sql,$data);
    }
}