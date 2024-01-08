<script src="https://cdn.tailwindcss.com"></script>

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

</head>

<body>
     <!-- categories  -->
    <div class="flex space-x-4 items-center justify-center m-8 rounded-full bg-slate-100">
        <button id="carousel-prev" class="px-2 py-1 border rounded-md border-gray-400 bg-white shadow">←</button>
        <div class="carousel-container flex overflow-hidden" id="carousel-container">

            <?php
            foreach ($wiki as $categorie) {
            ?>
                <div class="carousel-item ">
                    <!-- category_detail.php?category_id= -->
                    <a href="<?php echo $categorie['category_id']; ?>">
                        <?php echo $categorie['category_name']; ?>
                    </a>

                </div>
            <?php
            }
            ?>
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

    <!-- articls  -->
    <section class="flex flex-col justify-center items-center gap-8 m-8">

        <div class="max-w-2xl overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-500">
            <img class="object-cover w-full h-64" src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="Article">

            <div class="p-6">
                <div>
                <span class="px-3 py-1 text-xs text-blue-800 uppercase bg-blue-200 rounded-full dark:bg-blue-300 dark:text-blue-900"><?php echo $categorie['category_name']; ?></span>
                    <a href="#" class="block mt-2 text-xl font-semibold text-gray-800 transition-colors duration-300 transform dark:text-white hover:text-gray-600 hover:underline" tabindex="0" role="link">I Built A Successful Blog In One Year</a>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Molestie parturient et sem ipsum volutpat vel. Natoque sem et aliquam mauris egestas quam volutpat viverra. In pretium nec senectus erat. Et malesuada lobortis.</p>
                </div>

                <div class="mt-4">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <img class="object-cover h-10 rounded-full" src="https://images.unsplash.com/photo-1586287011575-a23134f797f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=48&q=60" alt="Avatar">
                            <a href="#" class="mx-2 font-semibold text-gray-700 dark:text-gray-200" tabindex="0" role="link">Jone Doe</a>
                        </div>
                        <span class="mx-1 text-xs text-gray-600 dark:text-gray-300">21 SEP 2015</span>
                        <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>

                    </div>
                </div>
            </div>
        </div>
    </section>




</body>

</html>