<?php
include './backend/class-register/class-register.php';
$firstName  =$_POST('contact-FirstName');
$lastName =$_POST('contact-LastName');
$newEmail = $_POST('contact-NewEmail');
$newPassword = $_POST('contact-NewPassword');
$confirmPassword = $_POST('contact-ConfirmPassword');
$user = new User($firstName,$lastName,$newEmail,$newPassword,$confirmPassword);
var_dump( $user->getFirstName()." ".$user->getLastName()." ".$user->getNewEmail()." ".$user->getNewPassword()." ".$user->getConfirmPassword());
