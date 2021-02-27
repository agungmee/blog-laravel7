<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Post Form
        </div>
        <div class="card-body">
            
        <form action="<?php echo e(route('admin.post')); ?>" method="POST">

            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label for="Title"></label>
              <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Post Body"></label>
                <textarea name="post" id="post" class="form-control" placeholder="Your Post Here" aria-describedby="helpId"></textarea>
            </div>

            <div class="form-group">
                <label for="Author Name"></label>
                <input type="text" name="author" id="author" class="form-control" placeholder="Author Name" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Category"></label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Category" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="Tags"></label>
                <input type="text" name="tags" id="tags" class="form-control" placeholder="Tags" aria-describedby="helpId">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit Post</button>

        </form>
        </div>

    </div>

    <div class="card">
        <div class="card-body">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Title</th>
                        <th scope="col">Body Post</th>
                        <th scope="col">Category</th>
                        <th scope="col">Tags</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>

                    <?php $i = 1; ?> 
                    <tbody>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"> <?php echo $i++; ?> </th>
                        <td> <?php echo e($post->title); ?> </td>
                        <td> <?php echo e(Str::limit($post->post_body,100,'...')); ?> </td>
                        <td> <?php echo e($post->category); ?> </td>
                        <td> <?php echo e($post->tags); ?> </td>
                        <td> <a href="/admin/<?php echo e($post->slug); ?>/edit" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Delete</a> </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        
        </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/blog-laravel7/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>