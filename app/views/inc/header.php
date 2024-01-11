<header class="header sticky top-0 bg-white shadow-md p-4 z-50 flex flex-col md:flex-row md:items-center md:justify-between">
    <!-- Logo -->
    <div class="flex items-center mb-4">
        <img src="<?= URLROOT ?>img/lettre-w.png" class="w-10 h-10 mr-2">
        <a href="<?= URLROOT ?>" class="font-bold text-2xl text-purple-600">Wiki<sup>TM</sup></a>
    </div>

    <!-- Navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
            <li class="p-2 border-b border-gray-300">
                <a href="<?= URLROOT ?>Pages/category" class="text-lg text-purple-600">Category</a>
            </li>
            <li class="p-2 border-b border-gray-300">
                <a href="<?= URLROOT ?>Pages/wiki" class="text-lg text-purple-600">Wiki</a>
            </li>
        </ul>
    </nav>

    <!-- Search -->
    <div class="mt-4 md:mt-0">
        <div class="relative text-gray-600">
            <input type="text" placeholder="Search" class="w-full border border-gray-200 rounded-md py-2 px-4 focus:outline-none focus:border-purple-500 transition-all duration-300" />
            <svg class="absolute right-4 top-3 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>  

    <!-- User Actions -->
    <div class="flex items-center mt-4 md:mt-0">
        <?php if (isset($_SESSION['userId'])) { ?>
            <a href="<?= URLROOT ?>Pages/writeWiki" class="bg-purple-600 text-white px-4 py-2 rounded-md">Write</a>
        <?php } else { ?>
            <div class="flex items-center space-x-2">
                <a href="#" class="text-purple-600 text-lg hover:underline">Log in</a>
                <span class="text-gray-400">|</span>
                <a href="#" class="text-purple-600 text-lg hover:underline">Sign up</a>
            </div>
        <?php } ?>
    </div>
</header>
