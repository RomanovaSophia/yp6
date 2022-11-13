<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наш сайт</title>
</head>
<body>
<header>
    Шапка
    <?php if(auth()->guard()->guest()): ?>
        <a href="<?php echo e(route('login')); ?>">Войти</a>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('logout')); ?>">Выйти</a>
    <?php endif; ?>
    <hr>
    <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('user')); ?>">Кабинет</a>
        <a href="<?php echo e(route('logout')); ?>">Выйти</a>
    <?php endif; ?>
</header>
<?php echo $__env->yieldContent('content'); ?>
<footer>
    <hr>
    Подвал
</footer>
</body>
</html>
<?php /**PATH C:\Users\Danil\Desktop\romanova-laravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>