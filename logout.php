<?php
require "./includes/Database.php";
require "./includes/Functions.php";
tryRememberingUser();
redirectIfNotAuthenticated();

unset($_COOKIE['user_id']);
unset($_SESSION['user_id']);

// var_dump(isAuthenticated());
// tryRememberingUser();
// var_dump(isAuthenticated());

header('Location: /');
exit;