<?php

require_once '../model/DBConnect.php';
$db = new DBConnect();

function validEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function validPassword($password){
    $hasUpper = false;
    $hasNumber = false;
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            $hasUpper = true;
        }
        if (ctype_digit($password[$i])) {
            $hasNumber = true;
        }
    }
    if ($hasUpper == false || $hasNumber == false || $password == "" || strlen($password) < 10) {
        return false;
    }
    return true;
}

function authenticateUser(){
    $errorExists = false;
    if(!(validEmail($_POST['email']) && validPassword($_POST['password']) && $GLOBALS['db']->emailQuery($_POST['email']) && $GLOBALS['db']->checkPassword($_POST['email'], $_POST['password']))){
        $errorExists = true;
    }

    if($errorExists){
        $_POST['errors']['login'] = "Invalid email/password";
        require '../../tpl/login.php';
    } else {
        $_POST['errors']['login'] = "";
        $user = @$GLOBALS['db']->getUserInfo($_POST['email']);
        session_start();
        $_SESSION['role'] = $user['role'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_POST['redirect'] = "dashboard";
        require '../controller/RedirectController.php';
    }
}

authenticateUser();
?>