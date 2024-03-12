<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать новый пост</title>
</head>
<body>
    <h1>Создать новый пост</h1>

    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="title">Заголовок:</label><br>
        <input type="text" id="title" name="title"><br><br>

        <label for="content">Содержание:</label><br>
        <textarea id="content" name="content"></textarea><br><br>

        <button type="submit">Создать</button>
    </form>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\laravel.gorkunova\resources\views/posts/create.blade.php ENDPATH**/ ?>