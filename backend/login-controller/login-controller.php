<?php
//var_dump($_POST);
if (isset($_POST)) {
    if ($_POST['contact-login'] == 'Login') {
        $admin_email = $_POST['contact-email'];
        $admin_password = $_POST['contact-password'];
        $admin_register = $_POST['contact-login'];
        if ($admin_email == 'laimh1221@gmail.com' && $admin_password == '123456') {
            header("Location: ../../index.php");
            exit();
        } else {
            header("Location: ../../login.php");
            exit();
        }
    } else {
        header("Location: ../../login.php");
        exit();
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
