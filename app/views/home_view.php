<?php
$categories = $data['categories'];
$wiki = $data['wiki'];
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


<!-- categories  -->
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

<section class="dark:bg-white-800 dark:text-gray-100">
    <div class="container max-w-6xl p-6 mx-auto space-y-6 sm:space-y-12">
        <div class="grid justify-center grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <?php foreach ($data['wiki'] as $wiki) : ?>
                <a rel="noopener noreferrer" href="#" class="max-w-sm mx-auto group hover:no-underline focus:no-underline bg-white">
                    <img role="presentation" class="object-cover w-full rounded h-44 dark:bg-gray-500" src="<?= URLROOT ?>img/<?= $wiki->wikImage ?>">
                    <div class=" space-y-2">
                        <div class="flex  my-2">
                            <img class=" w-6 h-6 rounded-full" src="<?= URLROOT ?>img/<?= $wiki->usrImage ?>" alt="<?= $wiki->username ?>">
                            <p class="p-1 text-sm text-gray-400"><?= $wiki->username ?></p>
                        </div>
                        <h3 class="text-2xl text-black font-semibold group-hover:underline group-focus:underline">
                            <?= $wiki->title ?> (ID: <?= $wiki->wiki_id ?>)
                        </h3>
                        <p class="font-medium text-black"><?= $articleDesc = substr($wiki->content, 0, 120); ?></p>
                        <span class="text-xs text-black"><?= $wiki->created_at ?></span>
                    </div>
                </a>
                <!-- wiki id in form  -->
            <?php endforeach; ?>
        </div>
        <div class="flex justify-center">
            <button type="button" class="px-6 py-3 text-sm rounded-md hover:underline bg-white text-black">Load more posts...</button>
        </div>
    </div>
</section>

<?php require_once APPROOT . '/views/inc/footer.php' ?>