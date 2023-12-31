<?php $__env->startSection('content'); ?>
<div class="page page-auth page-login">
    <div class="container">
        <div class="row items-stretch min-h-[100vh]">

            <div style="background: #ECEAEA; gap:18vh" class="flex flex-col justify-start col-lg-5 trr">
                <div class="items-center p-8 row max-lg:px-1">
                    <div class="col-6 justify-start d-flex">
                        <a href="<?php echo e(route('index')); ?>" class="navbar-brand flex justify-center">
                            <img src="<?php echo e(asset(site()['primary_logo'])); ?>" <?php if(isset($information['logo_2x_path'])): ?> srcset="/<?php echo e($information['logo_2x_path']); ?> 2x" <?php endif; ?> alt="<?php echo e($information['site_name']); ?>" class="w-[100px] md:w-[120px] lg:w-[140px] group-[.navbar-shrinked]/body:hidden dark:hidden">
                        </a>
                    </div>
                    <div class="col-6 !text-end lg:hidden">
                        <a href="<?php echo e(route('index')); ?>" class="text-heading !no-underline lg:text-white bg-transparent">
                            <svg class="!me-2 rtl:-scale-x-100" width="8" height="10" viewBox="0 0 6 10"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.45536 9.45539C4.52679 9.45539 4.60714 9.41968 4.66071 9.36611L5.10714 8.91968C5.16071 8.86611 5.19643 8.78575 5.19643 8.71432C5.19643 8.64289 5.16071 8.56254 5.10714 8.50896L1.59821 5.00004L5.10714 1.49111C5.16071 1.43753 5.19643 1.35718 5.19643 1.28575C5.19643 1.20539 5.16071 1.13396 5.10714 1.08039L4.66071 0.633963C4.60714 0.580392 4.52679 0.544678 4.45536 0.544678C4.38393 0.544678 4.30357 0.580392 4.25 0.633963L0.0892856 4.79468C0.0357141 4.84825 0 4.92861 0 5.00004C0 5.07146 0.0357141 5.15182 0.0892856 5.20539L4.25 9.36611C4.30357 9.41968 4.38393 9.45539 4.45536 9.45539Z" />
                            </svg>
                            <?php echo e(__('Back to Home')); ?>

                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="mx-auto col-lg-6">
                        <h1 class="m:text-center mb-11"><?php echo e(__('Forgot Password')); ?></h1>
                        <form novalidate="novalidate" id="password_reset_form" onsubmit="return PasswordResetMailForm();">
                            <div class="mb-[20px]">
                                <label class="form-label"><?php echo e(__('Email Address')); ?></label>
                                <input type="email" class="form-control" id="password_reset_email" placeholder="<?php echo e(__('your@email.com')); ?>" autocomplete="off" required>
                            </div>
                            <div class="row">
                                <div class="col !text-end">
                                    <a href="<?php echo e(route('login')); ?>"><?php echo e(__('Remember Your Password?')); ?></a>
                                </div>
                            </div>
                            <div class="row mt-[25px]">
                                <div class="col">
                                    <button id="PasswordResetFormButton" form="password_reset_form" class="md:ml-0 md:mb-[43px] m-auto w-max bg-gradient-to-l from-teal-400 to-emerald-500 rounded-full mt-14 md:mt-10 flex gap-2 items-center px-6 py-2 lg:mb-6 font-semibold text-white btn btn-primary w-100"><?php echo e(__('Send Instructions')); ?></button>
                                </div>
                            </div>
                            <!-- TODO Openai Demo -->
                        </form>
                        <?php if($information['register_active'] == 1): ?>
                            <div class="mt-20 text-center text-muted">
                                <?php echo e(__("Don't have account yet?")); ?> <a href="<?php echo e(route('register')); ?>" tabindex="-1" class="font-medium underline"><?php echo e(__('Sign up')); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between overflow-hidden bg-center bg-cover col-lg-7 max-lg:hidden" style="background: linear-gradient(#09ADA0 100%, #2EDEB6 100%);">
                <div id="icons_wrapper_f">
                    <a target="_BLANK" href="<?php echo e($webSiteContent['lnsp_bminl_1']); ?>" class="wrap">
                        <img class="logo" src="<?php echo e(asset($webSiteContent['lnsp_bmin_1'])); ?>" alt="">
                    </a>

                    <a target="_BLANK" href="<?php echo e($webSiteContent['lnsp_bminl_2']); ?>" class="wrap">
                        <img class="logo" src="<?php echo e(asset($webSiteContent['lnsp_bmin_2'])); ?>" alt="">
                    </a>

                    <a target="_BLANK" href="<?php echo e($webSiteContent['lnsp_bminl_3']); ?>" class="wrap">
                        <img class="logo" src="<?php echo e(asset($webSiteContent['lnsp_bmin_3'])); ?>" alt="">
                    </a>

                    <a target="_BLANK" href="<?php echo e($webSiteContent['lnsp_bminl_4']); ?>" class="wrap">
                        <img class="logo" src="<?php echo e(asset($webSiteContent['lnsp_bmin_4'])); ?>" alt="">
                    </a>

                    <a target="_BLANK" href="<?php echo e($webSiteContent['lnsp_bminl_5']); ?>" class="wrap">
                        <img class="logo" src="<?php echo e(asset($webSiteContent['lnsp_bmin_5'])); ?>" alt="">
                    </a>
                </div>
                <div class="container">
                    <img style="height: auto; width:100%" src="<?php echo e(asset('assets\img\login\cover.png')); ?>" alt="MagicAI Dashboard Mockup">
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/auth/password/forgot-password.blade.php ENDPATH**/ ?>