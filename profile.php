<?php
require "./includes/Database.php";
require "./includes/Functions.php";

redirectIfNotAuthenticated();

$user = $database->select("users", '*', [

    "id" => getUserID(),
]);

var_dump($user);
var_dump(getUserID());

if (getInput('submit') !== null) {
    var_dump($_POST);

    $fullName = getInput('full_name');
    $email = getInput('email');
    $age = getInput('age');
    $sex = getInput('sex');

    $mobile = getInput('mobile');
    $facebook = getInput('facebook');
    $twitter = getInput('twitter');

    $union = getInput('union');
    $upozila = getInput('upozila');
    $thana = getInput('thana');
    $district = getInput('district');
    $division = getInput('division');

    $insert = $database->insert("users", [
        "full_name" => $fullName,
        "email"     => $email,
        "age"       => $age,
        "sex"       => $sex,

        "contact_phone"    => $mobile,
        "contact_facebook"  => $facebook,
        "contact_twitter"   => $twitter,

        "location_union"     => $union,
        "location_upozila"   => $upozila,
        "location_thana"     => $thana,
        "location_district"  => $district,
        "location_division"  => $division,
    ]);

    if ($insert) {
        // echo "created";
        header('Location: /profile.php');
        exit;
        // var_dump($insert);
    } else {
        // var_dump($insert);
    }
} else {
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
    <header class="z-50 relative w-full bg-gray-900 overflow-hidden sticky top-0" x-data="{navigationOpen: false}">
        <div class=" flex justify-between items-center text-white px-6 container mx-auto">
            <div class="flex items-center h-16 z-50 hover:text-red-500">
                <a href="/">
                    Bloodbank.
                </a>
            </div>
            <div class="flex justify-end items-center">
                <div class="flex lg:mt-0 items-center lg:block py-16 scale lg:py-0 fixed lg:static w-2/3 lg:w-auto left-0 top-0 bottom-0 overflow-x-auto  bg-gray-700 lg:bg-gray-900 z-30 transform transition-all duration-300 origin-top-left lg:origin-right" @click.away="navigationOpen = false" x-show="navigationOpen" x-transition:enter-start="opacity-0 lg:scale-75" x-transition:enter-end="opacity-100 lg:scale-100" x-transition:leave-start="opacity-100 lg:scale-100" x-transition:leave-end="opacity-0 lg:scale-75">
                    <ul class="flex text-white text-lg lg:text-sm flex-wrap items-center max-h-full overflow-auto">
                        <li class="lg:mx-2 w-full lg:w-auto shadow lg:shadow-none">
                            <a href="/search.php" class="p-4 block hover:text-red-500">Search</a>
                        </li>
                        <li class="lg:mx-2 w-full lg:w-auto shadow lg:shadow-none">
                            <a href="/request.php" class="p-4 block hover:text-red-500">Request</a>
                        </li>
                        <li class="lg:mx-2 w-full lg:w-auto shadow lg:shadow-none">
                            <a href="/profile.php" class="p-4 block hover:text-red-500">Profile</a>
                        </li>
                        <li class="lg:mx-2 w-full lg:w-auto shadow lg:shadow-none">
                            <a href="/logout.php" class="p-4 block hover:text-red-500">Logout</a>
                        </li>
                    </ul>

                </div>
                <button class="flex justify-center flex-col w-6 h-8 space-y-1 flex-wrap focus:outline-none" @click="navigationOpen = !navigationOpen">
                    <span class="h-1 w-6 bg-white rounded" x-show.transition="!navigationOpen"></span>
                    <span class="h-1 w-6 bg-white rounded"></span>
                    <span class="h-1 w-6 bg-white rounded" x-show.transition="!navigationOpen"></span>
                </button>
            </div>
        </div>
    </header>

    <main class="px-5 mx-auto my-3 ">
        <!-- component -->
        <div class="w-full relative mt-4 shadow-2xl rounded my-24 overflow-hidden">
            <div class="top h-64 w-full bg-blue-600 overflow-hidden relative">
                <img src="https://images.unsplash.com/photo-1503264116251-35a269479413?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="" class="bg w-full h-full object-cover object-center absolute z-0">
                <div class="flex flex-col justify-center items-center relative h-full bg-black bg-opacity-50 text-white">
                    <img src="./assets/img/farhan-avatar.jpg" class="h-24 w-24 object-cover rounded-full">
                    <h1 class="text-2xl font-semibold">Farhan Israq</h1>
                    <h4 class="text-sm font-semibold">Joined Since '20</h4>
                </div>
            </div>
            <div class="grid grid-cols-12 bg-white ">

                <div class="col-span-12 w-full px-3 py-6 justify-center flex space-x-4 border-b border-solid md:space-x-0 md:space-y-4 md:flex-col md:col-span-2 md:justify-start ">

                    <a href="profile.php" class="text-sm p-2 bg-indigo-900 text-white text-center rounded font-bold">Basic Information</a>

                    <a href="blood-profile.php" class="text-sm p-2 bg-indigo-200 text-center rounded font-semibold hover:bg-indigo-700 hover:text-gray-200">Blood Profile</a>

                </div>

                <div class="col-span-12 md:border-solid md:border-l md:border-black md:border-opacity-25 h-full pb-12 md:col-span-10">
                    <div class="px-4 pt-4">
                        <form method="POST" class="flex flex-col space-y-8">

                            <div>
                                <h3 class="text-2xl font-semibold">Basic Information</h3>
                                <hr>
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Full Name
                                </label>
                                <input type="text" name="full_name" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Email
                                </label>
                                <input type="email" name="email" value="" class="w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                                <div class="form-item w-full">
                                    <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                        Age
                                    </label>
                                    <input type="number" name="age" value="" class="w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                                </div>

                                <div class="form-item w-full">
                                    <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                        Sex
                                    </label>
                                    <select name="sex" class="w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                                        <option value="0"></option>
                                        <option value="1">Male</option>
                                        <option value="2">Female</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <h3 class="text-2xl font-semibold ">Contact Information</h3>
                                <hr>
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Mobile No.
                                </label>
                                <input type="tel" name="mobile" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-4">

                                <div class="form-item w-full">
                                    <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                        Facebook Username:
                                    </label>
                                    <input type="text" name="facebook" value="" class="w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                                </div>

                                <div class="form-item w-full">
                                    <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                        Twitter Username:
                                    </label>
                                    <input type="text" name="twitter" value="" class="w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                                </div>
                            </div>

                            <div>
                                <h3 class="text-2xl font-semibold ">Location Information</h3>
                                <hr>
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Union
                                </label>
                                <input type="text" name="union" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Upozila
                                </label>
                                <input type="text" name="upozila" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Thana
                                </label>
                                <input type="text" name="thana" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    District
                                </label>
                                <input type="text" name="district" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="form-item">
                                <label for="name" class="mb-3 font-bold mb-1 text-xs tracking-wide text-gray-600 sm:text-sm">
                                    Division
                                </label>
                                <input type="text" name="division" value="" class=" w-full py-2 px-2 placeholder-gray-400 border rounded sm:text-base focus:border-gray-700 focus:outline-none">
                            </div>

                            <div class="mt-6">
                                <button type="submit" value="submit" name="submit" class="flex w-full items-center justify-center px-4 py-3 text-sm text-gray-100 uppercase bg-gray-700 rounded cursor-pointer hover:bg-gray-800 focus:bg-gray-800 focus:outline-none" type="submit">
                                    <span class="ml-3">Save</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </main>


    <footer class="flex flex-col justify-between items-start px-6 py-2 bg-gray-900 sm:flex-row">
        <div>
            <a href="#" class="text-xl font-bold text-gray-100 hover:text-gray-400">Bloodbank.</a>
            <br>
            <a href="https://farhanshares.com" class="mt-1 flex items-center text-gray-500">
                <span>
                    Created with
                </span>
                <span>
                    <svg class=" w-5 h-4 text-red-500 " fill="currentColor" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </span>
                by Farhan Israq
            </a>
        </div>

        <p class="py-2 text-gray-100 sm:py-0">All rights reserved &copy; 2020</p>

        <div class="flex -mx-2">
            <a href="https://linkedin.com/farhanshares" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Linkden">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                    <path d="M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z" />
                </svg>
            </a>

            <a href="https://facebook.com/farhanshares" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Facebook">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                    <path d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z" />
                </svg>
            </a>

            <a href="https://twitter.com/farhanshares" class="mx-2 text-gray-100 hover:text-gray-400" aria-label="Twitter">
                <svg class="h-4 w-4 fill-current" viewBox="0 0 512 512">
                    <path d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" />
                </svg>
            </a>
        </div>
    </footer>
</body>

</html>