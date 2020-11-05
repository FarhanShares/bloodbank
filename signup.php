<?php
require_once './includes/Init.php';

redirectIfAuthenticated();

if (getInput('submit') !== null) {
    // todo: check for errors
    // todo: hash password

    $fullName = getInput('full_name');
    $email = getInput('email');
    $password = getInput('password');
    $passwordConfirmation = getInput('passwordConfirmation');

    $insert = $database->insert("users", [
        "full_name"       => $fullName,
        "email"           => $email,
        "password"        => $password,
    ]);

    if ($insert) {
        header('Location: /profile.php');
        exit;
    } else {
        // todo: set error messages
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank | Farhan Israq</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
</head>

<body class="bg-gray-200 antialiased">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <a href="/">
            <h2 class=" text-lg text-gray-800 font-bold">
                Bloodbank.
            </h2>
        </a>
        <div class="w-8/12 p-6 mx-auto bg-white rounded-md shadow-md my-5">
            <h2 class="text-lg text-gray-700 font-semibold capitalize">Account Info</h2>

            <form method="POST">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-4">
                    <div>
                        <label class="text-gray-700 font-bold text-sm" for="full_name">Full Name</label>
                        <input id="full_name" name="full_name" type="text" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-gray-800 focus:outline-none ">
                    </div>

                    <div>
                        <label class="text-gray-700 font-bold  text-sm" for="emailAddress">Email Address</label>
                        <input id="emailAddress" name="email" type="email" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-gray-800 focus:outline-none">
                    </div>

                    <div>
                        <label class="text-gray-700 font-bold  text-sm" for="password">Password</label>
                        <input id="password" name="password" type="password" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-gray-800 focus:outline-none">
                    </div>

                    <div>
                        <label class="text-gray-700 font-bold  text-sm" for="passwordConfirmation">Password Confirmation</label>
                        <input id="passwordConfirmation" name="passwordConfirmation" type="password" class="w-full mt-2 px-4 py-2 block rounded bg-white text-gray-800 border border-gray-300 focus:border-gray-800 focus:outline-none">
                    </div>
                </div>

                <div class="flex justify-center md:justify-end mt-4">
                    <button type="submit" name="submit" value="submit" class="w-full md:w-auto  px-4 py-2 bg-gray-800 text-gray-200 rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">Register</button>
                </div>
            </form>
        </div>

        <a href="/signin.php">
            <h2 class="text-sm text-blue-500 hover:text-gray-700">
                Sing in instead
            </h2>
        </a>
    </div>
</body>

</html>