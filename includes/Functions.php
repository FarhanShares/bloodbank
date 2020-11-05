<?php


// Get input or null
function getInput($key, $post = true)
{
    if ($post === true) {
        return isset($_POST[$key]) ? $_POST[$key] : null;
    }
    return isset($_GET[$key]) ? $_GET[$key] : null;
}

// Get input or empty string
function oldInput($key, $post = true)
{
    if ($post === true) {
        return isset($_POST[$key]) ? $_POST[$key] : '';
    }
    return isset($_GET[$key]) ? $_GET[$key] : '';
}

function getUserID()
{
    return $_COOKIE['user_id'] ?? null;
}

function isAuthenticated()
{
    return isset($_COOKIE['user_id']) ? true : false;
}




// Middlewares
function redirectIfAuthenticated()
{
    if (!isAuthenticated()) {
        header('Location: /signin.php');
        exit;
    }
}

function redirectIfNotAuthenticated()
{
    if (isAuthenticated()) {
        header('Location: /signin.php');
        exit;
    }
}
