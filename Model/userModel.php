<?php
include_once "../Util/ConnectDB.php";
class UserModel{
    
    private $email;
    private $password;
    
    public function __construct($email,$password){
        
        $this->email = $email;
        $this->password = $password;
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
            'username' => $this->username,
            'password' => $this->password
        ];
        $sql = "INSERT INTO user(username, password) VALUES (:username, :password)";
        $dbCon->insertData($sql, $data);
    }

    public function getAllUser(){
        $dbCon = new ConnectDb("","","","");
        $query = "SELECT email, password from user";
        $data = $dbCon->getAllData($query);
        $dbCon->disconnected();
        return $data;
    }

    public function getData($username) {
        $dbCon = new ConnectDb("","","","");
        $sql = "SELECT * FROM user WHERE username=:username";
        $data = ['username' => $username];
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