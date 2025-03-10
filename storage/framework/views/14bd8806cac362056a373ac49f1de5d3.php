<?php $__env->startSection('content'); ?>
<?php
$role=Auth::user()->role;
?>

<?php if($role=='Admin'): ?>
    <?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($role=='Pastor'): ?>
    <?php echo $__env->make('branch_admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif($role=='Member'): ?>
    <?php echo $__env->make('member.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Meshack\Desktop\church_management\resources\views/dashboard.blade.php ENDPATH**/ ?>