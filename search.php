<?php
require_once './includes/Init.php';

$getUsers = $database->select('users', '*');
$userChunks = array_chunk($getUsers, 2, true);

include_once './partials/header.php';
?>

<main class="px-5 mx-auto my-3 mt-10">
    <div class="md:flex md:flex-wrap">
        <?php foreach ($userChunks as $users) { ?>
            <?php foreach ($users as $user) { ?>
                <div class="w-full md:w-1/2 my-5">
                    <div class=" bg-gray-200 px-5 py-5">
                        <div class="w-full mx-auto rounded-lg bg-white shadow-lg px-5 pt-5 pb-10 text-gray-800" style="max-width: 500px">
                            <div class="w-full pt-1 pb-5">
                                <div class="overflow-hidden rounded-full w-20 h-20 -mt-16 mx-auto shadow-lg">
                                    <img src="./assets/img/farhan-avatar.jpg" alt="">
                                </div>
                            </div>
                            <div class="w-full mb-10">
                                <div class="text-sm text-gray-600 px-5 ">
                                    <div class="flex items-center justify-between">
                                        <div class="w-3/12">Name:</div>
                                        <div class="w-9/12 text-right text-gray-700 pl-2"><?= $user['full_name'] ?></div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3/12">Blood group:</div>
                                        <div class="w-9/12 text-right text-gray-700 pl-2">Farhan</div>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3/12">Last Donated at:</div>
                                        <div class="w-9/12 text-right text-gray-700 pl-2">Farhan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full flex items-center justify-between">
                                <a href="contact.php?id=<?= $user['id'] ?>" class="block text-sm text-indigo-500 ">Contact Info</a>
                                <a href="request.php?id=<?= $user['id'] ?>" class="block text-sm text-indigo-500 ">Direct Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</main>

<?php
include_once './partials/footer.php';
?>