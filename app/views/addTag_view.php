<?php require_once APPROOT . '/views/inc/head.php' ?>
<div x-data="setup()" :class="{ 'dark': isDark }">
    <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
        <?php require_once APPROOT . '/views/inc/sideBar.php' ?>
        <section class="max-w-4xl p-6 mx-auto bg-gray-400 rounded-md shadow-md my-7">
            <h1 class="text-4xl font-bold capitalize">Add tag</h1>
            <form method="POST" action="<?=URLROOT?>TagController/InsertTag" class="flex flex-col gap-5">
                <div class="grid grid-cols-1 gap-1 mt-4 sm:grid-cols-2">
                    <div>
                        <label class="font-bold" for="name">tag Name</label>
                        <input id="name" name="tag_name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-400 bg-white border border-[#685942] rounded-md focus:border-[#685942] focus:outline-none focus:ring">
                        <span class="font-bold text-orange-400"></span>
                    </div>
                </div>
                <div class="flex gap-6">
                    <button type="submit" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#FFF8ED] transition hover:bg-gray-900 hover:text-[#FFF2DF]">
                        Save
                    </button>
                    <a href="Pages/tag">
                        <button type="button" class="px-6 py-2 leading-5 transform rounded-md focus:outline-none font-bold bg-[#FFF8ED] transition hover:bg-gray-900 hover:text-[#FFF2DF]">
                            Cancel
                        </button>
                    </a>
                </div>
            </form>
        </section>
    </div>
</div>
<?php require_once APPROOT . '/views/inc/footer.php' ?>