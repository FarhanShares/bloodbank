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

// Auto login if cookie is found
// Warning: This is vulnerable. we are authenticating
// just based on the presence of user_id cookie,
// not explicitly setting & checking token
// todo: we'll update it later with a secure way hopefully.
function tryRememberingUser()
{
    if (isAuthenticated()) {
        return true;
    }

    if (getUserID() !== null) {
        $_SESSION['user_id'] = getUserID();
        return true;
    }

    return false;
}

function isAuthenticated()
{
    return isset($_SESSION['user_id']) ? true : false;
}

// Middlewares
function redirectIfAuthenticated($path = '/search.php')
{
    if (isAuthenticated() === true) {
        header('Location: ' . $path);
        exit;
    }
}

function redirectIfNotAuthenticated($path = '/signin.php')
{
    if (isAuthenticated() === false) {
        header('Location: ' . $path);
        exit;
    }
}
