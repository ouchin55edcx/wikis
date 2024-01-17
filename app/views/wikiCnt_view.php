<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php';    $wiki = $data['wiki'];?>

<!-- Blog post with featured image -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto">
        <!-- Blog post header -->
        <div class="py-8">
            <!-- Use PHP to display the title and created_at -->
            <h1 class="text-3xl font-bold mb-2"><?= $data['wiki']->title ?></h1>
            <p class="text-gray-500 text-sm">Published on <time datetime="<?= $data['wiki']->created_at ?>"><?= date('F j, Y', strtotime($data['wiki']->created_at)) ?></time></p>
        </div>

        <!-- Featured image -->
        <!-- Use PHP to dynamically generate the image source based on your data -->
        <img src="<?= URLROOT ?>img/<?= $data['wiki']->wikImage ?>" alt="Featured image" class="w-full h-auto mb-8">

        <!-- Blog post content -->
        <div class="prose prose-sm mb-20 sm:prose lg:prose-lg xl:prose-xl mx-auto">
            <!-- Use PHP to dynamically insert content from your data -->
            <p><?= $data['wiki']->content ?></p>
        </div>
    </div>
</div>
