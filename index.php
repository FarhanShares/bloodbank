<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank | Farhan Israq</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="font-sans bg-white flex flex-col min-h-screen w-full min-h-screen">
        <div>
            <div class="bg-gray-200 px-4 py-4">
                <div class="w-full md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between">
                    <div class="text-center md:text-left">
                        <a href="/" class="inline-block py-2 text-gray-800 text-2xl font-bold hover:text-gray-900">Bloodbank.</a>
                    </div>

                    <div>
                        <div class="hidden md:block">
                            <a href="#" class="inline-block py-1 md:py-4 text-gray-600 mr-6 font-bold">How it Works</a>
                        </div>
                    </div>

                    <div class="text-center md:text-right block">
                        <a href="/signin.php" class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-600 mr-6">Login</a>
                        <a href="/signup.php" class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg">Register</a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-200 md:overflow-hidden">
                <div class="px-4 py-16">
                    <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                        <h1 class="font-bold text-gray-700 text-2xl sm:text-3xl md:text-5xl leading-tight mb-6">
                            People live when people give
                        </h1>

                        <p class="text-gray-600 text-xl md:text-2xl md:px-18">
                            Every drop will help
                        </p>

                        <div class="hidden md:block h-40 w-40 rounded-full bg-blue-800 absolute right-0 bottom-0 -mb-64 -mr-48"></div>

                        <div class="hidden md:block h-5 w-5 rounded-full bg-yellow-500 absolute top-0 right-0 -mr-40 mt-32"></div>
                    </div>
                </div>
                <!-- start: search-component -->
                <div class="flex  justify-center items-center py-16 scale">
                    <ul class="flex text-white text-sm flex-wrap items-center">
                        <li class=" text-gray-600">
                            <a href="/search.php" class="p-4 block hover:text-red-500">Search Donors</a>
                        </li>
                    </ul>

                </div>
                <!-- end: search-component -->


                <svg class="fill-current bg-gray-200 text-white hidden md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill-opacity="1" d="M0,64L120,85.3C240,107,480,149,720,149.3C960,149,1200,107,1320,85.3L1440,64L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                </svg>
            </div>


            <p class="text-center p-4 text-gray-600 mt-10">
                Created by <a class="border-b text-blue-500" href="https://farhanshares.com" target="_blank">Farhan Israq</a>
            </p>
        </div>
    </div>
</body>

</html>