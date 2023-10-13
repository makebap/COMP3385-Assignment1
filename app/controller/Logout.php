<?php

session_abort();
$_POST['redirect'] = "index";
require './RedirectController.php';

?>