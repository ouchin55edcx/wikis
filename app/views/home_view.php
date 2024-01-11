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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($data['wiki'] as $wiki) : ?>
            <div class="group max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                <a href="<?= URLROOT ?>Pages/wikiCnt/<?= $wiki->wiki_id ?><?= $wiki->wiki_id ?>">
                    <img class="object-cover w-full h-44 dark:bg-gray-500" src="<?= URLROOT ?>img/<?= $wiki->wikImage ?>" alt="Wiki Image">
                </a>
                <div class="p-4">
                    <div class="flex items-center mb-2">
                        <a href="<?= $wiki->category_id ?>" class="inline-block px-2 py-1 text-xs font-semibold text-purple-600 bg-purple-200 rounded-full"><?= $wiki->category_name ?></a>
                        <p class="ml-2 text-sm text-gray-400">Written by: <?= $wiki->username ?></p>
                    </div>

                    <a href="<?= URLROOT ?><?= $wiki->wiki_id ?>" class="text-2xl font-semibold text-black group-hover:underline group-focus:underline"><?= $wiki->title ?></a>
                    <p class="mt-2 text-black"><?= $articleDesc = substr($wiki->content, 0, 120); ?></p>
                    <span class="text-xs text-gray-700"><?= $wiki->created_at ?></span>

                    <div class="mt-4">
                        <p class="text-sm font-medium text-gray-500">Tags:</p>
                        <?php foreach ($data['wiki'] as $wikiTag) : ?>
                            <span class="inline-block px-2 py-1 text-xs font-semibold text-purple-600 bg-purple-200 rounded-full"><?= $wikiTag->tag_names ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once APPROOT . '/views/inc/foot.php' ?>
