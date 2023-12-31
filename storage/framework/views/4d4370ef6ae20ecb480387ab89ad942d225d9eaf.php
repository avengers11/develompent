<?php
    $agencies = site_content('futureAiCategories');
    $chunk_size = ceil(count($agencies) / 3);
    [$first, $second, $third] = array_chunk($agencies, $chunk_size);
?>
<section class="container py-10 md:py-14 lg:py-20">
    <div class="flex flex-col px-6 lg:flex-row lg:gap-4 lg:justify-center">
        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:justify-start">
            <?php $__currentLoopData = $first; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 <?php echo e($loop->odd ? 'self-start' : 'self-end'); ?>"
                    style="color: <?php echo e($agency->color); ?>">
                    <p><?php echo e($agency->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:pt-6 lg:justify-start">
            <?php $__currentLoopData = $second; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 <?php echo e($loop->odd ? 'self-start' : 'self-end'); ?>"
                    style="color: <?php echo e($agency->color); ?>">
                    <p><?php echo e($agency->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div
            class="flex flex-col items-center justify-center md:flex-row md:justify-around lg:flex-col lg:pt-3 lg:justify-start">
            <?php $__currentLoopData = $third; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="border-2 lg:border-[3px] border-current rounded-xl flex justify-center items-center w-[250px] h-[60px] md:h-[70px] xl:h-[80px] xl:text-xl text-lg font-bold lg:self-auto mb-4 <?php echo e($loop->odd ? 'self-start' : 'self-end'); ?>"
                    style="color: <?php echo e($agency->color); ?>">
                    <p><?php echo e($agency->name); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/components/digital-agencies.blade.php ENDPATH**/ ?>