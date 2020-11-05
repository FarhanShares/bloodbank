<?php
require "./includes/Database.php";
require "./includes/Functions.php";

redirectIfAuthenticated();


$msg = '';

if (getInput('submit') !== null) {
    $email = getInput('email');
    $password = getInput('password');

    $find = $database->select("users", ['id', 'email', 'password'], [
        "AND" => [
            "email" => $email,
            "password" => $password,
        ]
    ]);

    if ($find) {
        setcookie(
            'user_id',
            $find[0]['id'],
            time() + (10 * 365 * 24 * 60 * 60)
        );
        $_SESSION['user_id'] = $find[0]['id'];
        // Redirect to search.php
        header('Location: /search.php');
        exit;
    } else {
        $msg = 'Invalid Credentials.';
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
    <div class="relative flex flex-col items-center justify-center min-h-screen bg-gray-100 items-top">
        <a href="/">
            <h2 class=" text-lg text-gray-800 font-bold">
                Bloodbank.
            </h2>
        </a>

        <!-- start:component -->
        <div class=" flex-col h-auto mx-auto my-5 bg-white rounded-md shadow-lg py-5" style="width: 400px">


            <div class=" flex flex-col items-center justify-center w-full my-5 ">
                <div class="h-6 text-red-500">
                    <?= $msg ?>
                </div>
                <form method="post" action="" class="w-full p-6">

                    <div class="flex flex-col mb-4">
                        <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                            Email
                        </label>

                        <div class="relative">

                            <div class="absolute top-0 left-0 flex w-10 h-full border border-transparent">
                                <div class="z-10 flex items-center justify-center w-full h-full text-lg text-gray-600 bg-gray-100 rounded-tl rounded-bl">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>

                            <input id="email" type="text" name="email" placeholder="Email" value="<?= oldInput('email') ?>" class="relative w-full py-2 pl-12 pr-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">

                        </div>
                    </div>

                    <div class="flex flex-col mb-4">
                        <label for="name" class="mb-2 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                            Password
                        </label>

                        <div class="relative">

                            <div class="absolute top-0 left-0 flex w-10 h-full border border-transparent">
                                <div class="z-10 flex items-center justify-center w-full h-full text-lg text-gray-600 bg-gray-100 rounded-tl rounded-bl">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>

                            <input id="password" type="password" name="password" placeholder="Password" value="" class="relative w-full py-2 pl-12 pr-2 text-sm placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">

                        </div>
                    </div>

                    <div class="mt-6">
                        <button type="submit" name="submit" value="submit" class="flex w-full items-center justify-center px-4 py-3 text-sm text-gray-100 uppercase bg-gray-700 rounded cursor-pointer hover:bg-gray-800 focus:bg-gray-800 focus:outline-none" type="submit">
                            <span class="ml-3">Login</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end:component -->
        <a href="/signup.php">
            <h2 class="text-sm text-blue-500 hover:text-gray-700">
                Sing up instead
            </h2>
        </a>

    </div>

</body>

</html>