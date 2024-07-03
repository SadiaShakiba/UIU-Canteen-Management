<?php $__env->startSection('main-container'); ?>


<h2>hello <?php echo e(session('student_id')); ?> , </h2>


<a href="/logout">logout</a>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('Rabeya.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\UIUCanteenSadia\resources\views/Rabeya/profile.blade.php ENDPATH**/ ?>