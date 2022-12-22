<?php
session_start();
include_once "../Model/userModel.php";

if (isset($_POST)) {
    if ($_POST['contact-login'] == 'Login') {
        $username = isset($_POST['contact-username'])?$_POST['contact-username']:"";
        $email = isset($_POST['contact-email'])?$_POST['contact-email']:"";
        $password = isset($_POST['contact-password'])?md5($_POST['contact-password']):"";

        $user = new UserModel($username, $email, $password);
       
        $data = $user->getData();

        
        if ($email == $data['email'] && $password == $data['password']) {
            $_SESSION['username'] = $data['name'];
            $_SESSION['is_login'] = true;
            header("Location: ../../index.php");
            // exit();
        } else {
            header("Location: ../../login.php");
            // exit();
        }
    } else {
        header("Location: ../../login.php");
        // exit();
    }
}

// include "../Model/userModel.php";
// if (isset($_POST) && !empty($_POST)) {
//     $user = new User($_POST["contact-email"], MD5($_POST["contact-password"]));
//    // $data = $user->getData($_POST["txt_username"]);
//    // $data = $user->insertData($_POST["txt_username"], MD5($_POST["txt_password"]));
//     // $user->deleteUser($_POST["txt_username"]);
   
// } else{
//     echo $_GET["name"];
// }
?>
