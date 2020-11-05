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