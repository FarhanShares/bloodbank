<?php
require_once './includes/Init.php';

redirectIfNotAuthenticated();

unset($_COOKIE['user_id']);
session_unset();
session_destroy();
// var_dump(isAuthenticated());
// tryRememberingUser();
// var_dump(isAuthenticated());

header('Location: /');
exit;
