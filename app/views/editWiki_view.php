<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>

<div class="flex items-center justify-center h-screen z-0">
    <div class="w-[70%] mt-5">
        <form method="post" action="<?= URLROOT ?>WikiController/InsertWiki" enctype="multipart/form-data" class="container mx-auto my-8 p-8 bg-white rounded shadow-lg">
            <h1 class="text-3xl font-bold mb-4">Create Article</h1>

            <!-- Article Title -->
            <div class="mb-4">
                <label for="article-title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" value="" id="article-title" name="title" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Article Content -->
            <div class="mb-4">
                <label for="article-content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="article-content" name="content" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <!-- Article Image -->
            <div class="mx-auto max-w-xs">
                <label for="image" class="mb-1 block text-sm font-medium text-gray-700">Upload file</label>
                <input id="image" accept="image/*" type="file" name="wikiImg" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
            </div>

            <!-- Select Category -->
            <div class="mb-4">
                <label for="select-category" class="block text-sm font-medium text-gray-700">Select Category</label>
                <select required id="select-category" name="select-category" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="" disabled selected>Category</option>
                    <?php foreach ($data['categories'] as $category) { ?>
                        <option value="<?= $category->category_id ?>"><?= $category->category_name ?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Add Tags -->
            <div class="bg-gray-100">
                <div class="container mx-auto p-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-lg font-semibold mb-4">Tag Cloud</h2>
                        <div class="flex flex-wrap gap-2">
                        <?php foreach ($data['tag'] as $tag) { ?>
                            <input type="checkbox" id="<?= $tag->tag_name ?>" name="tag[]" value="<?= $tag->tag_id ?>"/>
                            <label for="<?= $tag->tag_name ?>"><?= $tag->tag_name ?></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Push Button -->
            <div>
                <button id="push-button" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Push Article</button>
            </div>
        </form>
    </div>
</div>