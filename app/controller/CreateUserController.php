<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once '../model/DBConnect.php';
$db = new DBConnect();

function uniqueUser($username){
    if ($username == ""){
        $_POST['errors']['username'] = "Invalid username.";
        return false;
    }
    if (!$GLOBALS['db']->usernameQuery($username)){
        $_POST['errors']['username'] = "";
        return true;
    } else {
        $_POST['errors']['username'] = "Username taken.";
        return false;
    }
}

function validEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_POST['errors']['email'] = "Invalid email.";
        return false;
    }
    $_POST['errors']['email'] = "";
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
        $_POST['errors']['password'] = "Passwords must contain at least one upper case character, at least one digit and be at least 10 characters long";
        return false;
    }
    return true;
}

function registerUser(){
    $errorExists = false;
    if (!uniqueUser($_POST['username'])) {
        $errorExists = true;
    }
    if (!validEmail($_POST['email'])) {
        $errorExists = true;
    }
    if (!validPassword($_POST['password'])) {
        $errorExists = true;
    }

    if($errorExists){
        require '../view/createUser.php';
    } else {
        $GLOBALS['db']->createUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['role']);
        $_POST['redirect'] = "dashboard";
        require '../controller/RedirectController.php';
    }
}

registerUser();
?>