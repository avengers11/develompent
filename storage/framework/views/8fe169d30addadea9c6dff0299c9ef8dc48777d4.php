<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- Title -->
        <title><?php echo e(config('app.name')); ?></title>

		<?php if(isset($information['google_analytics_code'])): ?>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e($information['google_analytics_code']); ?>"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', '<?php echo e($information['google_analytics_code']); ?>');
		</script>
		<?php endif; ?>

		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<meta name="stream-url" content="<?php echo e($streamUrl??route('user.dashboard')); ?>">

		<link rel="icon" type="image/x-icon" href="<?php echo e(asset(site()['favicons'])); ?>">

		<title><?php echo e($information['site_name']); ?> | <?php echo $__env->yieldContent('title'); ?></title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@500;600;700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="<?php echo e(asset('css/mr_wrapper.css')); ?>">
		<link href="/assets/css/fonts.css" rel="stylesheet">
		<!-- CSS files -->
		<link href="/assets/css/tabler.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-flags.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-payments.min.css" rel="stylesheet"/>
		<link href="/assets/css/tabler-vendors.min.css" rel="stylesheet"/>
		<link href="/assets/css/demo.min.css" rel="stylesheet"/>
		<link href="/assets/css/toastr.min.css" rel="stylesheet"/>
		<?php echo $__env->yieldContent('additional_css'); ?>
		<?php echo $__env->yieldPushContent('css'); ?>
		<link href="/assets/css/magic-ai.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
		<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
		<?php if($information['dashboard_code_before_head'] != null): ?>
			<?php echo $information['dashboard_code_before_head']; ?>

		<?php endif; ?>
	</head>

	<body class="app sidebar-mini">

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<!-- App-Content -->
				<div class="main-content">
					<div class="side-app">

						<?php echo $__env->yieldContent('content'); ?>

					</div>
				</div>

		</div><!-- End Page -->

        <?php echo $__env->make('auth.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		

	</body>
</html>


<?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/layouts/auth.blade.php ENDPATH**/ ?>