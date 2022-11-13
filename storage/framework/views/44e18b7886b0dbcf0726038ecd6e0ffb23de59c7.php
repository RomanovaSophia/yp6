<?php $__env->startSection('content'); ?>
    <h1>Привет, <?php echo e(Auth::user()->name); ?>!</h1>
    <hr>
    <h2>Ваши заявки: </h2>
    <ul>

        <?php foreach($posts as $post): ?>
        <li>
            Текст: <?=
            $post->text
            ?>
            <br>
            Дата:<?=
            $post->created_at
            ?>
        </li>
            <br>
        <?php endforeach; ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Danil\Desktop\romanova-laravel\resources\views/user.blade.php ENDPATH**/ ?>