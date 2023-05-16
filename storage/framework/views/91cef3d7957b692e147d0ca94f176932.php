


<?php $__env->startSection('page'); ?>
<a class='btn btn-success' href="<?php echo e(route('users.index')); ?>">Manage</a>
<form action="<?php echo e(route('users.store')); ?>" method ="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<div class="row mb-3">
	<label for="username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="username" id="username" placeholder="Username">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="password" id="password" placeholder="Password">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save</button>
</form>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.erp.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\innova-project\resources\views/pages/erp/user/create.blade.php ENDPATH**/ ?>