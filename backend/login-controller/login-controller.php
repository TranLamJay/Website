<?php
//var_dump($_POST);
echo $_POST['contact-login'] == 'Login';
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
