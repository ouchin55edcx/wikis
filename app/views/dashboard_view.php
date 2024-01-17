<?php require_once APPROOT . '/views/inc/head.php';

if ( $_SESSION['is_admin'] == 0)  {
    redirect('Pages/login');
} else {

?>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-400 text-black dark:text-white z-10">

            <?php require_once APPROOT . '/views/inc/sideBar.php' ?>

            <div class="h-full ml-14 mb-10 md:ml-64 relative ">

                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow  ">
                    <div class="p-4 bg-green-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Total Wiki</h3>
                        <p class="text-3xl"><?= $data['strWiki'] ?></p>
                    </div>
                </div>

                <div class="flex items-center bg-white border rounded-sm overflow-hidden shadow">
                    <div class="p-4 bg-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2">
                            </path>
                        </svg>
                    </div>
                    <div class="px-4 text-gray-700">
                        <h3 class="text-sm tracking-wider">Total Category</h3>
                        <p class="text-3xl"><?= $data['strCat'] ?>
                        </p>
                    </div>
                </div>

                <!-- Add Category Link -->
                <a href="<?= URLROOT ?>CategoryController/AddCategory" class="relative text-white">
                    <button class="bg-gray-600 rounded-full w-48 h-16 text-white font-semibold m-2 relative left">
                        <div class="flex gap-3 justify-center items-center">
                            <span>
                                <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" />
                                </svg>
                            </span>
                            <span class="text-xl">Add</span>
                        </div>
                    </button>
                </a>

                <!-- Category Table -->
                <div class=" mx-4">
                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full border border-gray-300">
                                <thead>
                                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                        <th class="px-4 py-2">Category</th>
                                        <th class="px-4 py-2">Date</th>
                                        <th class="px-4 py-2">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200">
                                    <?php foreach ($data['categories'] as $category) : ?>
                                        <tr class="hover:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                <p><?php echo $category->category_name; ?></p>
                                            </td>

                                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                <p><?php echo $category->created_at; ?></p>
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
<?php require_once APPROOT . '/views/inc/footer.php';
}
?>