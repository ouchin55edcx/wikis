<script src="https://cdn.tailwindcss.com"></script>

<nav class="flex items-center justify-around flex-wrap gap-10 bg-white py-4 lg:px-12 shadow border-solid border-t-2 border-blue-700">

    <!-- title -->
    <div class="flex justify-center lg:w-auto w-full lg:border-b-0 pl-6 pr-2 border-solid border-b-2 border-gray-300 pb-5 lg:pb-0">
        <div class="flex items-center flex-shrink-0 text-gray-800 mr-4">
            <span class="font-semibold text-xl tracking-tight">WIKI <sup>TM</sup></span>
        </div>
    </div>

    <!-- search -->
    <div class="relative mt-4 lg:mt-0 lg:mx-auto">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-4 h-4 text-gray-200 dark:text-gray-300" viewBox="0 0 24 24" fill="none">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </span>

        <input type="text" class="w-full py-1 pl-10 pr-4 text-black placeholder-black bg-white border-b border-black dark:placeholder-gray-300 dark:focus:border-gray-300 lg:w-56 lg:border-transparent  focus:outline-none focus:border-gray-60" placeholder="Search">
    </div>

    <!-- logo and navigation links -->

    <div class="flex flex-wrap items-center justify-end gap-12 lg:justify-end lg:flex-1  mt-4 lg:mt-0">
        <div class="h-8 w-auto leading-10 cursor-pointer">
            <a href="#">
                <img class="float-left h-8 w-8 object-cover" src="views/assets/images/edit (1).png">
                <span>Write</span>
            </a>
        </div>

        <div class="rounded-full h-10 leading-10 cursor-pointer">
            <a href="#">
                <img class="rounded-full float-left h-12 w-12 object-cover" src="views/assets/images/wiki_logo.png.webp">
            </a>
        </div>

        <!-- Add your navigation links or other content here-->
        <!-- <div>
            <a href="/paroly/public/home/login" class="border-r-2 border-black text-lg pr-2 mr-2">Log in</a>
            <a href="/paroly/public/home/signup" class="text-lg">Sign up</a>
        </div> -->
    </div>
</nav>
