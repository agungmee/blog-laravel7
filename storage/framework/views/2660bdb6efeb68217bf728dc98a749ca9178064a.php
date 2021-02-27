<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <h3 class="mb-3">New Post</h3>  
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col mr-2">

                    <div class="card mb-3" style="width: 15rem; height: 22rem;">
                        <a href="post/<?php echo e($post->slug); ?> "><img src="https://images.unsplash.com/photo-1593642532009-6ba71e22f468?ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="card-img-top" alt="..."></a>
                        <div class="card-body">
                            <h5 class="card-title"> <?php echo e($post->title); ?> </h5>
                            
                            <a href="#" class="btn btn-primary">Read More</a>
                        </div>

                        <div class="card-footer">
                            Publish on <?php echo e($post->created_at->diffForHumans()); ?>

                        </div>
                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    <?php echo e($posts->links()); ?>


</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog-laravel7/resources/views/home.blade.php ENDPATH**/ ?>