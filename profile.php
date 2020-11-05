<?php
require "./includes/Database.php";
require "./includes/Functions.php";
tryRememberingUser();
redirectIfNotAuthenticated();

$user = $database->select("users", '*', [
    "id" => getUserID(),
]);

// var_dump($user);
// var_dump(getUserID());

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
include_once './partials/header.php';
?>


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

<?php
include_once './partials/footer.php';
?>