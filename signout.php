<?php
require_once './includes/Init.php';

redirectIfNotAuthenticated();

unset($_COOKIE['user_id']);
unset($_SESSION['user_id']);
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(), '', 0, '/');

// var_dump(isAuthenticated());
// tryRememberingUser();
// var_dump(isAuthenticated());

header('Location: /');
exit;
