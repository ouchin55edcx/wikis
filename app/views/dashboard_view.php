<?php require_once APPROOT . '/views/inc/head.php' ?>
<header class="h-14 z-50 block">
    header
</header>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gradient-to-r from-purple-500 to-pink-500 text-black dark:text-white z-10">

        <?php require_once APPROOT . '/views/inc/sideBar.php' ?>

        <div class="h-full ml-14 mt-14 mb-10 md:ml-64 relative">

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 justify-items-center">
                <!-- Card 1 -->
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 dark:bg-gray-800 shadow-lg rounded-md flex flex-col items-center justify-center p-6 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <!-- Icon -->
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full mb-4 transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <div class="text-center">
                        <p class="text-2xl"><?= $data['strWiki'] ?></p>
                        <p>Wiki</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gradient-to-r from-purple-500 to-pink-500 dark:bg-gray-800 shadow-lg rounded-md flex flex-col items-center justify-center p-6 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <!-- Icon -->
                    <div class="flex justify-center items-center w-14 h-14 bg-white rounded-full mb-4 transition-all duration-300 transform group-hover:rotate-12">
                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <!-- Text Content -->
                    <div class="text-center">
                        <p class="text-2xl"><?= $data['strCat'] ?></p>
                        <p>Category</p>
                    </div>
                </div>
            </div>


            <!-- Add Category Link -->
            <a href="<?= URLROOT ?>CategoryController/AddCategory" class="relative text-white">
                Add
                <img class="w-12 h-12 rounded-full absolute right-3 top-8" src="<?= URLROOT ?>img/992651.png" alt="">
            </a>

            <!-- Category Table -->
            <div class="mt-4 mx-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full border border-gray-300">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">Action</th>
                                    <th class="px-4 py-2">Date</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <?php foreach ($data['categories'] as $category) : ?>
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <p><?php echo $category->category_name; ?></p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <div class="flex space-x-4">
                                                <a href="<?= URLROOT ?>CategoryController/EditCategory/<?php echo $category->category_id; ?>" class="text-blue-500 hover:text-blue-600">
                                                    <!-- Edit Icon -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    <p>Edit</p>
                                                </a>
                                                <a href="<?= URLROOT ?>CategoryController/DeleteCategory/<?php echo $category->category_id; ?>" class="text-red-500 hover:text-red-600">
                                                    <!-- Delete Icon -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                    <p>Delete</p>
                                                </a>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <p><?php echo $category->created_at; ?></p>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- ./Category Table -->
        </div>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/footer.php' ?>