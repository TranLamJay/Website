<?php
session_start();
include_once "../Model/userModel.php";

if (isset($_POST)) {
    if ($_POST['contact-register'] == 'Register') {
        $email = isset($_POST['contact-NewEmail'])?$_POST['contact-NewEmail']:"";
        $password = isset($_POST['contact-NewPassword'])?md5($_POST['contact-NewPassword']):"";
        $confirm_password = isset($_POST['contact-ConfirmPassword'])?md5($_POST['contact-ConfirmPassword']):"";
        $userName = isset($_POST['contact-UserName'])?$_POST['contact-UserName']:"";

        if ($password == $confirm_password) {
            $user = new UserModel($userName,$email, $password);
        }
        $data = $user->insertData();
        header("Location: ../../login.php");
        
    } else {
        header("Location: ../../register.php");
        // exit();
    }
}