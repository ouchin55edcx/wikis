<header class="header sticky top-0 bg-white shadow-md p-4 z-50 flex flex-col md:flex-row md:items-center md:justify-between">
    <div class="flex justify-between">
        <!-- Logo -->
        <div class="flex gap-6">
            <div class="flex items-center mb-2 md:mb-0">
                <img src="<?= URLROOT ?>img/lettre-w.png" class="w-8 h-8 mr-2">
                <a href="<?= URLROOT ?>" class="font-bold text-lg text-purple-600">Wiki<sup>TM</sup></a>
            </div>
            
            <!-- Navigation -->
            <nav class="nav font-semibold text-md hidden md:flex">
                <ul class="flex flex-col md:flex-row space-y-2 md:space-y-0 md:space-x-4">
                    <li class="p-2 border-b border-gray-300">
                        <a href="<?= URLROOT ?>Pages/category" class="text-md text-purple-600">Category</a>
                    </li>
                    <li class="p-2 border-b border-gray-300">
                        <a href="<?= URLROOT ?>Pages/wiki" class="text-md text-purple-600">Wiki</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Hamburger Menu Button -->
        <div class="md:hidden">
            <button id="hamburgerBtn" class="text-gray-600 focus:outline-none">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>



    <!-- Search -->
    <div class="relative mx-auto text-black">
        <input class="border border-gray-300 placeholder-current h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none dark:bg-gray-100 dark:border-gray-50 dark:text-black-200" type="searchInput" id="searchInput" name="search" placeholder="search">

        <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
            <svg class="text-black dark:text-black-200 h-4 w-4 fill-current shadow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>




    <!-- User Actions -->
    <div class="flex items-center mt-2 md:mt-0 gap-2 md:gap-4">

        <?php if (isset($_SESSION['user_id']) && $_SESSION['is_admin'] != 1) { ?>
            <a href="<?= URLROOT ?>Pages/writeWiki" class="bg-purple-600 text-white px-3 py-1.5 rounded-md text-sm hidden sm:inline">Write</a>
            <a href="<?= URLROOT ?>UsersController/LogOut" class="bg-purple-500 text-white px-3 py-1.5 rounded-md text-sm hidden sm:inline">Log out</a>
        <?php } else { ?>
            <div class="flex items-center space-x-1 md:space-x-2">
                <a href="<?= URLROOT ?>Pages/login" class="text-purple-600 text-sm hover:underline hidden sm:inline">Log in</a>
                <span class="text-gray-400 hidden sm:inline">|</span>
                <a href="<?= URLROOT ?>Pages/sign" class="text-purple-600 text-sm hover:underline hidden sm:inline">Sign up</a>
            </div>
        <?php } ?>
    </div>
</header>

<!-- Mobile Navigation Menu -->
<div id="mobileNav" class="md:hidden fixed inset-0 bg-white bg-opacity-95 z-50 hidden">
    <div class="flex justify-end p-4">
        <button id="closeMobileNav" class="text-gray-600 focus:outline-none">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <ul class="flex flex-col items-center space-y-2">
        <li>
            <a href="<?= URLROOT ?>Pages/category" class="text-md text-purple-600">Category</a>
        </li>
        <li>
            <a href="<?= URLROOT ?>Pages/wiki" class="text-md text-purple-600">Wiki</a>
        </li>
        <?php if (isset($_SESSION['user_id'])) { ?>
            <li>
                <a href="<?= URLROOT ?>Pages/writeWiki" class="text-md text-purple-600 <?php if ($isMobile) echo 'hidden'; ?>">Write</a>
            </li>
            <li>
                <a href="<?= URLROOT ?>UsersController/LogOut" class="text-md text-purple-600 <?php if ($isMobile) echo 'hidden'; ?>">Log out</a>
            </li>
        <?php } else { ?>
            <li>
                <a href="<?= URLROOT ?>Pages/login" class="text-md text-purple-600">Log in</a>
            </li>
            <li>
                <a href="<?= URLROOT ?>Pages/sign" class="text-md text-purple-600">Sign up</a>
            </li>
        <?php } ?>
    </ul>
</div>

<script>
    document.getElementById('hamburgerBtn').addEventListener('click', function() {
        document.getElementById('mobileNav').classList.toggle('hidden');
    });

    document.getElementById('closeMobileNav').addEventListener('click', function() {
        document.getElementById('mobileNav').classList.add('hidden');
    });
</script>