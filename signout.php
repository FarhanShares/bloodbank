<?php
require_once './includes/Init.php';

redirectIfNotAuthenticated();

unset($_COOKIE['user_id']);
unset($_SESSION['user_id']);

// var_dump(isAuthenticated());
// tryRememberingUser();
// var_dump(isAuthenticated());

header('Location: /');
exit;
