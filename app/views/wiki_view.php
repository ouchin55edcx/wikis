
    <?php require_once APPROOT . '/views/inc/head.php' ?>
    <?php require_once APPROOT . '/views/inc/header.php' ?>


    <section class="dark:bg-white-800 dark:text-gray-100">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($data['wiki'] as $wiki) : ?>
                <a href="<?= URLROOT ?>Pages/wikiCnt/<?= $wiki->wiki_id ?>" class="group max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <img class="object-cover w-full h-44 dark:bg-gray-500" src="<?= URLROOT ?>img/<?= $wiki->wikImage ?>" alt="Wiki Image">
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
                            <?php foreach ($data['wiki'] as $wiki) : ?>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $wiki->tag_names ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </a>
                
            <?php endforeach; ?>
        </div>

        <div class="flex justify-center">
        </div>
    </div>
</section>
