<div class="flex p-2 justify-between items-center border-b border-gray-300 flex-wrap">
    <div class="flex items-center">
        <img src="<?= URLROOT ?>img/lettre-w.png" class="w-10 h-10 mx-1">
        <h2 class="font-bold text-2xl text-purple-600">Wiki<sup>TM</sup></h2>
    </div>

    <div class="flex items-center w-full mt-2 md:mt-0 md:w-auto">
        <input type="text" placeholder="Search" class="w-full md:w-40 border border-gray-200 rounded-md py-1 px-2 focus:outline-none focus:border-purple-500 transition-all duration-300" />
        <svg class="absolute right-2 h-6 w-6 text-gray-400 hover:text-gray-500 md:hidden" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <div class="flex items-center gap-2 mt-2 md:mt-0">
        <?php if (isset($_SESSION['userId'])) { ?>
            <button class="bg-purple-600 text-white px-3 py-1 rounded-md">Write</button>
        <?php } else { ?>
            <div class="flex items-center">
                <a href="#" class="text-purple-600 text-lg mr-2 hover:underline">Log in</a>
                <span class="text-gray-400">|</span>
                <a href="#" class="text-purple-600 text-lg ml-2 hover:underline">Sign up</a>
            </div>
        <?php } ?>
    </div>
</div>