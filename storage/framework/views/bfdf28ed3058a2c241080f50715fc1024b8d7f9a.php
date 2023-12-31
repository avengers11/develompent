<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['title' => config('app.name'), 'setting']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['title' => config('app.name'), 'setting']); ?>
<?php foreach (array_filter((['title' => config('app.name'), 'setting']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e($title ?: config('app.name')); ?></title>

    <link rel="icon" type="image/x-icon" href="<?php echo e(asset(site()['favicons'])); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />

    
    <link rel="stylesheet" href="<?php echo e(asset('/css/owl/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/owl/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/mr_wrapper.css')); ?>">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/swiper-bundle.min.css')); ?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <script src="<?php echo e(asset('js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>

    <!-- Styles -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/site.css']); ?>
</head>

<body>
    <?php echo e($slot); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/layout/main.blade.php ENDPATH**/ ?>