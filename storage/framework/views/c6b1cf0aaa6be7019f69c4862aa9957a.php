
<?php $__env->startSection('title', 'Product create'); ?>
<?php $__env->startSection('contain'); ?>
 <form action="<?php echo e(route('product.store')); ?>" class="card p-5 shadow-lg" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <h1>Create Products</h1>
        <div class="col-sm-6 mb-3">
             <label for="firstName" class="form-label">Product Name</label>
             <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required="">
            </div>
            <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Stock</label>
                 <input type="number" class="form-control" name="stock" id="description" placeholder="0" value="">
            </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Price</label>
                 <input type="number" class="form-control" name="price" id="description" placeholder="0" value="">
            </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Category</label>
                    <select name="category_id" id="">
                        <option value="">Select Category</option>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cat->id); ?>" 
                                <?php echo e(old('category_id') == $cat->id ? 'selected' : ''); ?>

                                >
                                <?php echo e($cat->name); ?>

                                </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
             <div class="col-sm-6 mb-3">
                 <label for="lastName" class="form-label">Image</label>
                 <input type="file" class="form-control" name="image" id="description" placeholder="ontional" value="">
            </div>
            <div class="w-100 d-flex gap-3">
                <button type="submit" class="btn btn-outline-primary w-50">Save</button>
                <a href="<?php echo e(route('category.index')); ?>" class="btn btn-outline-secondary w-50">Cancel</a>
            </div>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_Laraval\crud_operation\resources\views/product/create.blade.php ENDPATH**/ ?>