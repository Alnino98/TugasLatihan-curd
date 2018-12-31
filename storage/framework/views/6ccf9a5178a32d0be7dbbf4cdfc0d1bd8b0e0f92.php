<?php $__env->startSection('teatle', 'PT.Co Ba'); ?>

<?php $__env->startSection('content'); ?>

 	<h1>Di Web pertama ini dikau akan melihat betapa Suramnya Kami</h1>
	<dir></dir>

	<h2><?php echo e($blogGw); ?></h2>
	
	<H2>Dan ini adalah users nya</H2>
	
	<?php foreach ($users as $user): ?>

		<li><?php echo e($user->nama. ' '. $user->pasword); ?></li>

	<?php endforeach ?>

	<?php echo $unescaped; ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>