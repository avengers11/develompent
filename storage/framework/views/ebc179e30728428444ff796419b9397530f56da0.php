<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['services']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['services']); ?>
<?php foreach (array_filter((['services']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<section id="features" class="mb-20 lg:pt-10">
    <div class="container xl:-translate-x-[70px]">
        <div class="flex flex-col p-2 mx-auto mt-4 md:mt-16 lg:w-11/12 md:flex-row md:flex-wrap lg:justify-center">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex gap-4 w-full justify-between lg:justify-start items-center  md:w-1/2 lg:w-[45%] mb-8 ">
                    <div class="flex items-center justify-center w-1/3">
                        <img src="<?php echo e(asset($service->icon)); ?>" class="lg:w-[130px] w-[90px]" alt="<?php echo e($service->title); ?>">
                    </div>
                    <div class="w-2/3 lg:w-[50%] text-zinc-800">
                        <h3 class="font-bold text-[1.25rem] lg:text-2xl lg:overflow-visible lg:whitespace-nowrap">
                            <?php echo e($service->title); ?></h3>
                        <p class="my-2 lg:text-xl"><?php echo e($service->description); ?></p>
                        <div class="w-1/2 border-b-4 border-b-sky-200"></div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/components/features.blade.php ENDPATH**/ ?>