<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>

<div class="flex items-center justify-center h-screen z-20">
    <div class="w-[70%] mt-5">
        <div class="container mx-auto my-8 p-8 bg-white rounded shadow-lg">
            <h1 class="text-3xl font-bold mb-4">Create Article</h1>

            <!-- Article Title -->
            <div class="mb-4">
                <label for="article-title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="article-title" name="article-title" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Article Content -->
            <div class="mb-4">
                <label for="article-content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea id="article-content" name="article-content" rows="5" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <!-- Article Image -->
            <div class="mx-auto max-w-xs">
                <label for="example1" class="mb-1 block text-sm font-medium text-gray-700">Upload file</label>
                <input id="example1" type="file" class="mt-2 block w-full text-sm file:mr-4 file:rounded-md file:border-0 file:bg-teal-500 file:py-2 file:px-4 file:text-sm file:font-semibold file:text-white hover:file:bg-teal-700 focus:outline-none disabled:pointer-events-none disabled:opacity-60" />
            </div>

            <!-- Select Category -->
            <div class="mb-4">
                <label for="select-category" class="block text-sm font-medium text-gray-700">Select Category</label>
                <select id="select-category" name="select-category" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                </select>
            </div>

            <!-- Add Tags -->
            <div class="mb-4">
                <label for="add-tags" class="block text-sm font-medium text-gray-700">Add Tags</label>
                <input type="text" id="add-tags" name="add-tags" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div class="mb-4">
    <label class="block text-sm font-medium text-gray-700">Tags</label>
    <div class="flex flex-wrap" id="tagContainer">
        <label for="tag1" class="mr-2 mb-2">
            <input type="radio" id="tag1" name="tags" value="Tag1" class="hidden">
            <span class="px-2 py-1 bg-gray-200 rounded cursor-pointer select-none" onclick="addTag('Tag1')">Tag1</span>
        </label>

        <label for="tag2" class="mr-2 mb-2">
            <input type="radio" id="tag2" name="tags" value="Tag2" class="hidden">
            <span class="px-2 py-1 bg-gray-200 rounded cursor-pointer select-none" onclick="addTag('Tag2')">Tag2</span>
        </label>

        <label for="tag3" class="mr-2 mb-2">
            <input type="radio" id="tag3" name="tags" value="Tag3" class="hidden">
            <span class="px-2 py-1 bg-gray-200 rounded cursor-pointer select-none" onclick="addTag('Tag3')">Tag3</span>
        </label>
        <!-- Add more static tags as needed -->
    </div>
</div>

<!-- Input field to store selected tags -->
<input type="text" id="selectedTagsInput" name="selectedTags" class="mt-1 block w-full border border-gray-300 rounded-md py-2 px-3 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

<script>
    function addTag(tag) {
        // Get the current value of the input field
        let currentTags = document.getElementById('selectedTagsInput').value;

        // Add the selected tag to the current value
        currentTags = currentTags ? currentTags + ', ' + tag : tag;

        // Update the input field value
        document.getElementById('selectedTagsInput').value = currentTags;

        // You can also visually indicate the selected tag, for example, by changing its color
        // For demonstration purposes, let's change the background color to green
        document.getElementById('tagContainer').querySelector(`[value="${tag}"]`).style.backgroundColor = 'green';
    }
</script>





            <!-- Push Button -->
            <div>
                <button id="push-button" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Push Article</button>
            </div>
        </div>
    </div>
</div>