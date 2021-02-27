<?php $__env->startSection('content'); ?>
    
    <div class="container">

        <div class="title">

           <h2> <?php echo e($posts->title); ?> </h2>

        </div>

        <div class="body">
            
            <p> <?php echo e($posts->post_body); ?> </p>

        </div>   
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog-laravel7/resources/views/posts/show.blade.php ENDPATH**/ ?>