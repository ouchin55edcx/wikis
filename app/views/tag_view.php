<?php require_once APPROOT . '/views/inc/head.php';
if (!isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 0)  {
    redirect('Pages/login');
}

?>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-400 text-black dark:text-white z-10">

        <?php require_once APPROOT . '/views/inc/sideBar.php' ?>

        <div class="h-full ml-14 mb-10 md:ml-64 relative ">


            <!-- Add Category Link -->
            <a href="<?= URLROOT ?>TagController/AddTag" class="relative text-white">
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
                                    <th class="px-4 py-2">Tag</th>
                                    <th class="px-4 py-2">Date</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                        <?php foreach ($data['tag'] as $tag) : ?>
                            <tr class="hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                    <p><?php echo $tag->tag_name; ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                    <p><?php echo $tag->created_at; ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                    <div class="flex space-x-4">
                                        <a href="<?= URLROOT ?>TagController/Edittag/<?php echo $tag->tag_id; ?>" class="text-blue-500 hover:text-blue-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                            <p>Edit</p>
                                        </a>
                                        <a href="<?= URLROOT ?>tagController/Deletetag/<?php echo $tag->tag_id; ?>" class="text-red-500 hover:text-red-600">
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
<?php require_once APPROOT . '/views/inc/footer.php' ?>