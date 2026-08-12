
<?php $__env->startSection('title', 'create'); ?>
<?php $__env->startSection('contain'); ?>
 <form action="<?php echo e(route('category.store')); ?>" class="card p-5 shadow-lg" method="POST">
    <?php echo csrf_field(); ?>
    <h1>Create Category</h1>
        <div class="col-sm-6 mb-3">
             <label for="firstName" class="form-label">Category Name</label>
             <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required="">
            </div>
            <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Description</label>
                 <input type="text" class="form-control" name="description" id="description" placeholder="ontional" value="">
            </div>
            <div class="w-100 d-flex gap-3">
                <button type="submit" class="btn btn-outline-primary w-50">Save</button>
                <a href="<?php echo e(route('category.index')); ?>" class="btn btn-outline-secondary w-50">Cancel</a>
            </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_Laraval\crud_operation\resources\views/category/create.blade.php ENDPATH**/ ?>