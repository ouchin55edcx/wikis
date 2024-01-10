<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>

<div class="flex items-center justify-center h-screen z-0">
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
            <div class="bg-gray-100">
                <div class="container mx-auto p-6">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <h2 class="text-lg font-semibold mb-4">Tag Cloud</h2>
                        <div class="flex flex-wrap gap-2">
                            <a href="#" class="bg-blue-200 hover:bg-blue-300 py-1 px-2 rounded-lg text-sm">Technology</a>
                            <a href="#" class="bg-green-200 hover:bg-green-300 py-1 px-2 rounded-lg text-sm">Programming</a>
                            <a href="#" class="bg-yellow-200 hover:bg-yellow-300 py-1 px-2 rounded-lg text-sm">Web Development</a>
                            <a href="#" class="bg-indigo-200 hover:bg-indigo-300 py-1 px-2 rounded-lg text-sm">Design</a>
                            <a href="#" class="bg-purple-200 hover:bg-purple-300 py-1 px-2 rounded-lg text-sm">AI</a>
                            <a href="#" class="bg-pink-200 hover:bg-pink-300 py-1 px-2 rounded-lg text-sm">Machine Learning</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Push Button -->
            <div>
                <button id="push-button" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Push Article</button>
            </div>
        </div>
    </div>
</div>