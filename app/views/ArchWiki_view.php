<?php require_once APPROOT . '/views/inc/head.php';

if (!isset($_SESSION['user_id']) && $_SESSION['is_admin'] == 0) {
    redirect('Pages/login');
}
?>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-400 text-black dark:text-white z-10">

        <?php require_once APPROOT . '/views/inc/sideBar.php' ?>

        <div class="h-full ml-14 mb-10 md:ml-64 relative ">
            <!-- Category Table -->
            <div class=" mx-4">
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full border border-gray-300">
                            <thead>
                                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">Date</th>
                                    <th class="px-4 py-2">Verification</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <?php foreach ($data['wiki'] as $wiki) : ?>
                                    <tr class="hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <p><?php echo $wiki->title ?></p>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <p><?= $wiki->created_at ?></p>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <div class="flex space-x-4">
                                                <a href="<?= URLROOT ?>Pages/AwikiCnt/<?php echo $wiki->wiki_id; ?>" class="text-green-500 hover:text-green-600">
                                                    <p class="bg-white p-2 rounded-full">Voir Content</p>
                                                </a>
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                            <div class="flex space-x-4">
                                                <?php if ($wiki->is_deleted == 1) : ?>
                                                    <!-- If Wiki is deleted, show a different color for the button -->
                                                    <a href="<?= URLROOT ?>WikiController/RestoreWiki/<?php echo $wiki->wiki_id; ?>" class="text-green-500 hover:text-green-600">
                                                        <!-- Restore Icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                                        </svg>
                                                        <p>Restore Wiki</p>
                                                    </a>
                                                <?php else : ?>
                                                    <!-- If Wiki is not deleted, show the regular delete button -->
                                                    <a href="<?= URLROOT ?>WikiController/ArchWiki/<?php echo $wiki->wiki_id; ?>" class="text-red-500 hover:text-red-600">
                                                        <!-- Delete Icon -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1 ml-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        <p>Archifi Wiki</p>
                                                    </a>
                                                <?php endif; ?>
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