<?php

include_once './Model/userModel.php';

class UserController {


    public function insertUser($user){
        $user->insertData();
    }

    public function updateUser($user){
        $user->update();
    }

    public function deleteUser($user){
        $user->deleteData();
    }

    public function getUser($user){
        $user->getData();
    }

    public function getAllUsers($user){
        $user->getAllData();
    }
}