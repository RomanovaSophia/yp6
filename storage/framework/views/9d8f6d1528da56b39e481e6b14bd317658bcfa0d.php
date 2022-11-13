<?php $__env->startSection('content'); ?>
    <h1>Добро пожаловать!</h1>
    <h4>Новые заявки для города:</h4>
    <ul>
        <?php foreach($cities as $city): ?>
        <li> <?= $city->text ?> </li>
        <?php endforeach; ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Danil\Desktop\romanova-laravel\resources\views/home.blade.php ENDPATH**/ ?>