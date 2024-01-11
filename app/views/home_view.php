    <?php
$categories = $data['categories'];
$wiki = $data['wiki'];

    // var_dump($data)
    ?>
    <?php require_once APPROOT . '/views/inc/head.php' ?>
    <?php require_once APPROOT . '/views/inc/header.php' ?>
    <style>
        .flex {
            display: flex;
        }

        .space-x-4 {
            margin-right: 1rem;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .carousel-container {
            display: flex;
            overflow: hidden;
        }

        .carousel-item {
            min-width: 200px;
            /* Set the width of each carousel item */
            box-sizing: border-box;
            text-align: center;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff;
            margin: 0 4px;
        }
    </style>


    <!--top 3 categories  -->
    <div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
    <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">Services</h2>
    <p class="mb-12 text-lg text-gray-500">Here are a few of the awesome Services we provide.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($categories as $category) : ?>
            <a href="<?php echo $category->category_id; ?>" class="w-full">
                <div class="relative h-full">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <!-- <img src="" alt="<?php echo $category->category_name; ?>" class="w-full h-auto mb-2"> -->
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800"><?= $category->category_name; ?></h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>

    <!-- top 3 wiki  -->

    <section class="dark:bg-white-800 dark:text-gray-100">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($data['wiki'] as $wiki) : ?>
                <div class="group max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-300 ease-in-out">
                    <a href="<?= URLROOT ?><?= $wiki->wiki_id ?>">
                        <img class="object-cover w-full h-44 dark:bg-gray-500" src="<?= URLROOT ?>img/<?= $wiki->wikImage ?>" alt="Wiki Image">
                    </a>
                    <div class="p-4">
                        <div class="flex items-center mb-2">
                            <a href="<?= $wiki->category_id ?>" class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $wiki->category_name ?></a>
                            <p class="ml-2 text-sm text-gray-400">Written by: <?= $wiki->username ?></p>
                        </div>

                        <a href="<?= URLROOT ?><?= $wiki->wiki_id?>" class="text-2xl font-semibold text-black group-hover:underline group-focus:underline"><?= $wiki->title ?></a>
                        <p class="mt-2 text-black"><?= $articleDesc = substr($wiki->content, 0, 120); ?></p>
                        <span class="text-xs text-gray-700"><?= $wiki->created_at ?></span>

                        <div class="mt-4">
                            <p class="text-sm font-medium text-gray-500">Tags:</p>
                            <?php foreach ($data['wiki'] as $wiki) : ?>
                                <span class="inline-block px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full"><?= $wiki->tag_names ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="flex justify-center">
        </div>
    </div>
</section>


    <?php require_once APPROOT . '/views/inc/footer.php' ?>