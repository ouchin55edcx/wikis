<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>


<section class="dark:bg-white-800 dark:text-gray-100 relative">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($data['wiki'] as $wiki) : ?>
                <div class="group relative max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <a href="<?= URLROOT ?>Pages/wikiCnt/<?= $wiki->wiki_id ?>">
                        <img class="object-cover w-full h-44 dark:bg-gray-500" src="<?= URLROOT ?>img/<?= $wiki->wikImage ?>" alt="Wiki Image">
                    </a>
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <img class="w-6 h-6 rounded-full" src="<?= URLROOT ?>img/<?= $wiki->usrImage ?>" alt="<?= $wiki->username ?>">
                            <p class="ml-2 text-sm text-gray-400"><?= $wiki->username ?></p>
                        </div>
                        <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $wiki->category_name ?></span>
                        <h2 class="text-2xl font-semibold text-black group-hover:underline group-focus:underline"><?= $wiki->title ?></h2>
                        <p class="mt-2 text-black"><?= $articleDesc = substr($wiki->content, 0, 120); ?></p>
                        <span class="text-xs text-gray-700"><?= $wiki->created_at ?></span>
                        <div class="mt-4">
                            <p class="text-sm font-medium text-gray-500">Tags:</p>
                            <div class="flex flex-wrap gap-2">
                                <?php foreach ($wiki->tag_names as $tag_name) : ?>
                                    <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $tag_name ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $wiki->user_id) : ?>
                            <div class="flex justify-between mt-4">
                                <a href="<?= URLROOT ?>WikiController/editWiki/<?= $wiki->wiki_id ?>" class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">Edit</a>
                                <a href="<?= URLROOT ?>WikiController/deleteWiki/<?= $wiki->wiki_id ?>" 					class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">Delete</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center">
        </div>
    </div>
</section>
<!-- <div class="w-screen h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full mx-auto py-16">

        <div class="bg-white px-6 py-4 my-3 w-3/4 mx-auto shadow rounded-md flex items-center">
            <div class="w-full text-center mx-auto">
                <button
					class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
					Primary
				</button>
                <button
					">
					Success
				</button>
                <button
					class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
					Error
				</button>
                <button
					class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
					Warning
				</button>
                <button
					class="border border-teal-500 bg-teal-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-teal-600 focus:outline-none focus:shadow-outline">
					Info
				</button>
                <button
					class="border border-gray-700 bg-gray-700 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline">
					Dark
				</button>
                <button
					class="border border-gray-200 bg-gray-200 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-gray-300 focus:outline-none focus:shadow-outline">
					Light
				</button>
            </div>
        </div>
    </div>
</div> -->