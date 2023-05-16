<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/user/_edit.blade.php" was generated by ProBot AI.
* Date: 16/05/2023 12:54:04 PM
* Contact: towhid1@outlook.com
*/
?>

<?php $__env->startSection('title','Edit User'); ?>
<?php $__env->startSection('style'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('page'); ?>
<a class='btn btn-success' href="<?php echo e(route('users.index')); ?>">Manage</a>
<form action="<?php echo e(route('users.update',$user)); ?>" method ="post" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field("PUT"); ?>
<div class="row mb-3">
	<label for="username" class="col-sm-2 col-form-label">Username</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="username" value="<?php echo e($user->username); ?>" id="username" placeholder="Username">
	</div>
</div>
<div class="row mb-3">
	<label for="email" class="col-sm-2 col-form-label">Email</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="email" value="<?php echo e($user->email); ?>" id="email" placeholder="Email">
	</div>
</div>
<div class="row mb-3">
	<label for="password" class="col-sm-2 col-form-label">Password</label>
	<div class="col-sm-10">
		<input type = "text" class="form-control" name="password" value="<?php echo e($user->password); ?>" id="password" placeholder="Password">
	</div>
</div>

<button type="submit" class="btn btn-primary">Save Change</button>
</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.erp.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\innova-project\resources\views/pages/erp/user/edit.blade.php ENDPATH**/ ?>