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
<section class="bg-cover pt-4 relative h-[320px] md:h-[400px] 2xl:h-[460px]"
    style="background-image: url('/images/bg/illustrated-woman-with-generative-ai.jpg')" id="section-3">

    <svg class="absolute w-28 top-[-97px] left-1/2 -translate-x-[45%]" viewBox="0 0 296 444" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M296 184.997H172.667V0L0 259.003H123.333V444L296 184.997Z" fill="url(#paint0_linear_415_2755)" />
        <defs>
            <linearGradient id="paint0_linear_415_2755" x1="148" y1="0" x2="148" y2="444"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#32E3B9" />
                <stop offset="1" stop-color="#00A19A" />
            </linearGradient>
        </defs>
    </svg>

    <div class="container-div flex justify-center text-center !mt-16 2xl:pb-10">
        <h2 class="font-bold text-white heading [&_strong]:text-teal-400">
            <?php echo site_content('service_title'); ?>

        </h2>
    </div>
    <div class="absolute bottom-0 w-full h-20 bg-teal-600 lg:h-24 2xl:h-28 opacity-80"></div>
</section>

<div class="flex justify-center w-full -mt-44 lg:-mt-52">
    <div class="container flex items-center gap-4 carousel3 owl-carousel owl-theme">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item pl-10 lg:pl-14 w-[90%] lg:w-[95%] py-2 md:pr-5 xlg:w-[550px]">
                <div class="flex bg-white rounded-[30px] Customshadow">
                    <div class="w-[30%] xl:w-[32%] md:w-[34%] flex items-center rounded-3xl md:rounded-[30px]"
                        style="background-color: <?php echo e($service->color); ?>">
                        <img src="<?php echo e(asset($service->image)); ?>" alt=""
                            class="-translate-x-[40px] xl:-translate-x-[50px] lg:-translate-x-[50px] md:-translate-x-[40px] rounded-[10px] md:rounded-[17px] max-w-[2000px] !w-[100px] md:!w-[150px] lg:!w-[170px] xl:!w-[200px] border-4"
                            style="border-color: <?php echo e($service->color); ?>">
                    </div>
                    <div class="w-[70%] md:w-[66%] p-4 md:p-6">
                        <div class="text-xs font-normal text-gray-500 md:text-sm xl:text-base"><?php echo e($service->slug); ?>

                        </div>
                        <h6 class="my-2 text-xl md:text-2xl lg:text-3xl xl:text-4xl !leading-[1] w-26 font-bold"
                            style="color: <?php echo e($service->color); ?>"><?php echo e($service->title); ?></h6>
                        <p class="h-full text-sm w-30 xl:text-base lg:py-2">
                            <?php echo e($service->description); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $(".carousel3").owlCarousel({
            items: 2,
            loop: false,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 1.5,
                },
                1000: {
                    items: 2,
                }
            }
        });
    });
</script>
<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/components/features-slider.blade.php ENDPATH**/ ?>