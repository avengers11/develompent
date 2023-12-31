<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"> <?php echo e(__('Appearance Settings')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-globe mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Frontend Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('SEO & Logos')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="col-8 m-auto">
			<div class="card overflow-hidden border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Setup Appearance Settings')); ?></h3>
				</div>
				<div class="card-body">

					<form action="<?php echo e(route('admin.settings.appearance.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('SEO Title')); ?></h6>
									<div class="form-group">
										<input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" value="<?php echo e($information['title']); ?>" autocomplete="off">
										<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('title')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('SEO Author')); ?></h6>
									<div class="form-group">
										<input type="text" class="form-control <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="author" name="author" value="<?php echo e($information['author']); ?>" autocomplete="off">
										<?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('author')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('SEO Keywords')); ?></h6>
									<div class="form-group">
										<input type="text" class="form-control <?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="keywords" name="keywords" value="<?php echo e($information['keywords']); ?>" autocomplete="off">
										<?php $__errorArgs = ['keywords'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('keywords')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-12">
								<div class="input-box">
									<h6><?php echo e(__('SEO Description')); ?></h6>
									<div class="form-group">
										<input type="text" class="form-control <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" name="description" value="<?php echo e($information['description']); ?>" autocomplete="off">
										<?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('description')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div>
								</div>
							</div>

						</div>

						<div class="card border-0 special-shadow">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Fav Icons')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-6">
										<div class="input-box border">
											<img src="<?php echo e(asset($WebSiteContent['favicons'])); ?>" alt="Main Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-6">
										<div class="input-box">
											<div class="input-group file-browser">
												<input type="text" class="form-control border-right-0 browse-file" placeholder="FavIcons" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="favicons" style="display: none;">
													</span>
												</label>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

                        <div class="card border-0 special-shadow">
							<div class="card-body">

								<h6 class="fs-12 font-weight-bold mb-4"><?php echo e(__('Primary Logo')); ?></h6>

								<div class="row">

									<div class="col-sm-12 col-md-6">
										<div class="input-box border">
											<img src="<?php echo e(asset($WebSiteContent['primary_logo'])); ?>" alt="Main Logo">
										</div>
									</div>

									<div class="col-sm-12 col-md-6">
										<div class="input-box">
											<div class="input-group file-browser">
												<input type="text" class="form-control border-right-0 browse-file" placeholder="Primary logo" readonly>
												<label class="input-group-btn">
													<span class="btn btn-primary special-btn">
														<?php echo e(__('Browse')); ?> <input type="file" name="primary_logo" style="display: none;">
													</span>
												</label>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>


						<!-- SAVE CHANGES ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="<?php echo e(route('admin.dashboard')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Cancel')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Laravel\51_pentaforce\resources\views/admin/frontend/appearance/index.blade.php ENDPATH**/ ?>