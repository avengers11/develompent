<?php
    $slides = DB::table('web_penta_force_ai_slides')->get();
    $howItWorks = DB::table('web_how_does_it_works')->first();
?>
<section class="relative -translate-y-5 xl:-translate-y-[56px] 2xl:-translate-y-[110px]" id="section-4">
    <div class="xl:translate-y-[81px]">
        <div class="text-center">
            <h2 class="font-bold text-gray-400 heading">
                PentaForce <span class="text-teal-600">Ai</span>
            </h2>
        </div>
        <div class="max-w-sm mx-auto mt-2 text-sm font-normal text-center text-gray-400 lg:text-xl">
            <?php echo e(site_content('penta_force_ai_description')); ?>

        </div>
    </div>
    <img src="<?php echo e(asset('/images/bg/v-shape-bg.png')); ?>" alt="V Shape Background"
        class="absolute min-w-full xl:h-[500px] top-[185px] xl:top-[297px]">
    <svg class="absolute w-28 top-[135px] left-1/2 -translate-x-[45%]  md:top-[159px] lg:top-[177px] xl:top-[306px] 2xl:top-[310px] 2xl:scale-125"
        viewBox="0 0 296 444" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M296 184.997H172.667V0L0 259.003H123.333V444L296 184.997Z" fill="url(#paint0_linear_415_2755)" />
        <defs>
            <linearGradient id="paint0_linear_415_2755" x1="148" y1="0" x2="148" y2="444"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#32E3B9" />
                <stop offset="1" stop-color="#00A19A" />
            </linearGradient>
        </defs>
    </svg>

    <div class="relative px-5 mt-44 md:mt-44 lg:mt-48 xl:mt-80 lg:px-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $slides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- 1 -->
                    <div class="xl:max-w-[1140px] max-xl:max-w-3xl swiper-slide">
                        <div
                            class="flex flex-col w-full overflow-hidden bg-white shadow-sm sm:items-center gap-x-5 rounded-3xl sm:flex-row">
                            <div class="px-6 py-3 space-y-2 text-center sm:pl-12 sm:text-left sm:w-[60%]">
                                <h3 class="text-2xl font-bold md:text-3xl lg:text-4xl"
                                    style="color: <?php echo e($item->color); ?>">
                                    <?php echo e($item->title); ?>

                                </h3>
                                <p class="text-sm lg:text-base"><?php echo e($item->description); ?></p>
                            </div>

                            <figure class="sm:m-3 bg-[#f5f5f7] sm:rounded-2xl overflow-hidden">
                                <img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->title); ?>" class="pentaforce_img flex-1 object-contain w-full aspect-[3/2] ">
                            </figure>
                        </div>
                        <div class="absolute hidden w-2 -translate-y-1/2 rounded-full sm:block top-1/2 left-3 h-1/2"
                            style="background: <?php echo e($item->color); ?>">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div
                class="absolute inset-0 flex items-center justify-between max-w-[900px] xl:min-w-[1280px] mx-auto text-teal-600">
                <div class="z-10 p-2 bg-white rounded-full shadow button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </div>
                <div class="z-10 p-2 bg-white rounded-full shadow button-next">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="<?php echo e(asset('js/swiper-bundle.min.js')); ?>"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: "auto",
            centeredSlides: true,
            spaceBetween: 80,
            navigation: {
                nextEl: ".button-next",
                prevEl: ".button-prev",
            }
        });
    </script>


    <div class="bg-center bg-no-repeat bg-cover pt-72 sm:pt-36 -mt-72 sm:-mt-40 lg:-mt-44"
        style="background-image: url('/images/bg/cybernetic-brain.jpg')" id="section-5">

        <div class="xl:-mt-[100px] relative bg-cover bg-center"
            style="background-image: url(<?php echo e(asset('images/shadow.svg')); ?>)">

            <div class="container">
                <div class="flex flex-col items-center mt-20 lg:mt-28 xl:pt-20">
                    <h2 class="font-bold text-center text-white heading">
                        <?php echo e($howItWorks->title); ?>

                    </h2>
                    <p class="text-center text-white  font-normal lg:text-xl 2xl:w-[430px] mt-3">
                        <?php echo e($howItWorks->description); ?>

                    </p>
                </div>
                
                <div class="flex flex-col items-start gap-8 pb-20 mt-9 xl:mt-14 lg:flex-row lg:justify-around">
                    <?php $__currentLoopData = json_decode($howItWorks->contents); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="flex items-start justify-center max-w-md gap-2 mx-auto">
                            <p class="text-5xl font-light text-white lg:text-8xl"><?php echo e($loop->iteration); ?></p>
                            <p class=" text-white w-3/5 lg:w-[200px] lg:text-xl flex-1"><?php echo e($item); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/components/pentaforce-ai.blade.php ENDPATH**/ ?>