<?php
$categories = $data['categories'];
?>
<?php require_once APPROOT . '/views/inc/head.php' ?>
<?php require_once APPROOT . '/views/inc/header.php' ?>


    
<div class="container relative flex flex-col justify-between h-full max-w-6xl px-10 mx-auto xl:px-0 mt-5">
    <h2 class="mb-1 text-3xl font-extrabold leading-tight text-gray-900">categories</h2>
    <p class="mb-12 text-lg text-gray-500">Here are a few of the awesome categories we provide.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
        <?php foreach ($categories as $category) : ?>
            <a href="<?= URLROOT?>Pages/categorieCnt" <?php echo $category->category_id; ?>" class="w-full">
                <div class="relative h-full">
                    <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-green-500 rounded-lg"></span>
                    <div class="relative h-full p-5 bg-white border-2 border-green-500 rounded-lg">
                        <div class="flex items-center -mt-1">
                            <!-- <img src="" alt="<?php echo $category->category_name; ?>" class="w-full h-auto mb-2"> -->
                            <h3 class="my-2 ml-3 text-lg font-bold text-gray-800"><?= $category->category_name; ?></h3>
                        </div>
                        <p class="mt-3 mb-1 text-xs font-medium text-green-500 uppercase">------------</p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
</div>