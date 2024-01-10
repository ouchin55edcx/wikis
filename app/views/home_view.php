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
    <div class="flex space-x-4 items-center justify-center m-8 rounded-full bg-slate-100">
        <button id="carousel-prev" class="px-2 py-1 border rounded-md border-gray-400 bg-white shadow">←</button>
        <div class="carousel-container flex overflow-hidden" id="carousel-container">
            <?php foreach ($categories as $category) : ?>
                <div class="carousel-item ">
                    <a class="" href="<?php echo $category->category_id; ?>">
                        <?php echo $category->category_name; ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <button id="carousel-next" class="px-2 py-1 border rounded-md border-gray-400 bg-white shadow">→</button>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const container = document.getElementById("carousel-container");
                const prevButton = document.getElementById("carousel-prev");
                const nextButton = document.getElementById("carousel-next");

                let currentIndex = 0;
                const itemsPerPage = 3;

                function updateCarousel() {
                    const start = currentIndex * itemsPerPage;
                    const end = start + itemsPerPage;

                    const items = container.children;

                    for (let i = 0; i < items.length; i++) {
                        items[i].style.display = i >= start && i < end ? "block" : "none";
                    }
                }

                function prevButtonClick() {
                    currentIndex = Math.max(0, currentIndex - 1);
                    updateCarousel();
                }

                function nextButtonClick() {
                    const maxIndex = Math.ceil(container.children.length / itemsPerPage) - 1;
                    currentIndex = Math.min(maxIndex, currentIndex + 1);
                    updateCarousel();
                }

                prevButton.addEventListener("click", prevButtonClick);
                nextButton.addEventListener("click", nextButtonClick);

                // Initial update
                updateCarousel();
            });
        </script>
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