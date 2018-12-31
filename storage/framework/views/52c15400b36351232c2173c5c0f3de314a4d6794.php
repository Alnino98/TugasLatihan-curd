<?php $__env->startSection('teatle', 'PT.Co Ba'); ?>


<?php $__env->startSection('content'); ?>

<h1>Selamat datang di blog Suram Saya</h1>
<p>Apa yang ingin kita lihat</p>

<hr>
<?php foreach ($blogs as $blog): ?>
	<li><?php echo e($blog->nama); ?></li>	
<?php endforeach ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>