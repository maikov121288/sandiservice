
<?php $__env->startSection('content'); ?>
    <h1><?php echo e(__('test')); ?></h1>
    <div class="language__inner">
        <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(LaravelLocalization::getCurrentLocale() == $localeCode): ?>
                <span class="language__inner--active"><?php echo e(strtoupper($localeCode)); ?></span>
            <?php else: ?>
                <a class="language__inner--link"
                   href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [])); ?>">
                    <?php echo e(strtoupper($localeCode)); ?>

                </a>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\sandiservice\resources\views/landing/index.blade.php ENDPATH**/ ?>