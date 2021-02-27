<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Edit Form
        </div>
        <div class="card-body">
            
            <form action="admin/<?php echo e($post->slug); ?>/update" method="POST">

            <?php echo method_field('patch'); ?>

            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="Title"></label>
                <input type="text" name="title" id="title" value=" <?php echo e(old('title') ?? $post->title); ?> " class="form-control" placeholder="Title" >
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="title"></label>
                <textarea type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId"><?php echo e(old('post_body') ?? $post->post_body); ?></textarea>
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="author"></label>
                <input type="text" name="author" id="author" value=" <?php echo e(old('author') ?? $post->author); ?>" class="form-control" placeholder="Author Name" aria-describedby="helpId">
                <?php $__errorArgs = ['author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="form-group">
                <label for="category"></label>
                <input type="text" name="category" id="category" value=" <?php echo e(old('category') ?? $post->category); ?>" class="form-control" placeholder="Category" aria-describedby="helpId">
                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>            
            </div>

            <div class="form-group">
                <label for="tags"></label>
                <input type="text" name="tags" id="tags" value=" <?php echo e(old('tags') ?? $post->tags); ?>" class="form-control" placeholder="Tags" aria-describedby="helpId">
                <?php $__errorArgs = ['tags'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 
            </div>

            <a href="" class="btn btn-success">Submit</a>

        </form>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog-laravel7/resources/views/admin/edit.blade.php ENDPATH**/ ?>