<?php
    $categories = $data['categories'];
    $wiki = $data['wiki'];

    // var_dump($data)
?>
<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>
<?php require_once APPROOT . '/views/inc/hero.php' ?>

<!-- Top 3 Wiki -->
<section class="container flex flex-col items-center justify-center my-8"> <!-- Adjusted margin here -->
    <h2 class="mb-4 text-4xl font-extrabold leading-tight text-purple-600">Explore Exciting Categories</h2>
    <p class="mb-8 text-lg text-gray-700">Discover a world of knowledge in our diverse categories.</p>
    <div class="flex justify-center gap-20">
        <?php foreach ($categories as $category) : ?>
            <a href="<?= URLROOT ?>Pages/categorieCnt/<?php echo $category->category_id; ?>" class="w-full">
                <div class="relative h-full p-5 bg-white border-2 border-purple-600 rounded-lg">
                    <div class="flex items-center -mt-1">
                        <h3 class="my-2 ml-3 text-lg font-bold text-gray-800"><?= $category->category_name; ?></h3>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-800 mt-8">Featured Wiki Articles</h2> <!-- Adjusted margin here -->
    <p class="mb-8 text-lg text-gray-700">Dive into captivating articles created by our community.</p>
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
                            <?php foreach ($wiki->tag_names as $tag_name) : ?>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $tag_name ?></span>
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

<?php require_once APPROOT . '/views/inc/foot.php' ?>
