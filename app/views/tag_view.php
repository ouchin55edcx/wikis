<?php require_once APPROOT . '/views/inc/head.php' ?>


<!-- Client Table -->
<div class="flex justify-end">
<div><?php require_once APPROOT . '/views/inc/sideBar.php' ?></div>
<a href="<?=URLROOT?>TagController/AddTag" class="relative">
                Add
                <img class="w-12 h-12 rounded-full absolute right-3 top-8" src="<?=URLROOT?>img/992651.png" alt="">
            </a>
<div class="mt-4 mx-4">
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full border border-gray-300">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-2">Categorie</th>
                        <th class="px-4 py-2">Action</th>
                        <th class="px-4 py-2">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <?php foreach ($data['tag'] as $tag) : ?>
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                <p><?php echo $tag->tag_name; ?></p>
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
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                <p><?php echo $tag->created_at; ?></p>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>