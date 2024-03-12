<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($post->title); ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        button {
            padding: 10px 20px;
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #c82333;
        }
        .back-link {
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo e($post->title); ?></h1>
        <p><?php echo e($post->content); ?></p>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Редактировать</a>
            <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Удалить</button>
            </form>
        <?php endif; ?>

        <a href="<?php echo e(route('posts.index')); ?>" class="back-link">Назад к списку</a>
    </div>
</body>
</html>
<?php /**PATH D:\OSPanel\domains\laravel.gorkunova\resources\views/posts/show.blade.php ENDPATH**/ ?>