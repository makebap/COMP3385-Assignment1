<?php
if (!isset($_SESSION)){
    session_start();
}

spl_autoload_register();
$load = function (string $className) {
    $file = __DIR__ . "/" . "{$className}.php";
    if (file_exists($file)) {
        require_once($file);
    }
};
spl_autoload_register($load);

if ($_POST['redirect'] == "registration") {
    require '../../tpl/registration.php';
} else if ($_POST['redirect'] == "login") {
    require '../../tpl/login.php';
} else if ($_POST['redirect'] == "dashboard") {
    if (isset($_SESSION)){
        require '../../tpl/dashboard.php';
    }
} else if ($_POST['redirect'] == "create") {
    if (isset($_SESSION['role']) && $_SESSION['role'] == "Research Group Manager"){
        require '../../tpl/createUser.php';
    }
} else if ($_POST['redirect'] == "index") {
    require '../../tpl/index.html';
}

?>