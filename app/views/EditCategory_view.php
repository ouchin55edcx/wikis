<?php require_once APPROOT . '/views/inc/head.php' ?>

<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-[#f0f4f8] dark:bg-gray-700 text-[#1a202c] dark:text-white">
        <?php require_once APPROOT . '/views/inc/sideBar.php' ?>

        <section class="max-w-4xl p-6 mx-auto bg-[#cbd5e0] dark:bg-gray-600 rounded-md shadow-md my-7">
            <h1 class="text-4xl font-bold capitalize text-[#2d3748] dark:text-white">Edit Category</h1>
            
            <form method="POST" action="<?=URLROOT?>CategoryController/UpdateCategory/<?= $data['category']->category_id; ?>" class="flex flex-col gap-5">
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div>
                        <label class="font-bold text-[#2d3748] dark:text-white" for="name">Category Name</label>
                        <input id="name" name="catName" value="<?= $data['category']->category_name; ?>" type="text" class="block w-full px-4 py-2 mt-2 text-[#2d3748] bg-white border border-[#e2e8f0] rounded-md focus:border-[#2d3748] focus:outline-none focus:ring">
                        <span class="font-bold text-orange-400"></span>
                    </div>
                </div>

                <div class="flex gap-6 mt-4">
                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#4299e1] text-white transition hover:bg-[#2b6cb0]">
                        Save
                    </button>
                    
                    <a href="dashboard">
                        <button type="button" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#4299e1] text-white transition hover:bg-[#2b6cb0]">
                            Cancel
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
</div>

<?php require_once APPROOT . '/views/inc/footer.php' ?>
