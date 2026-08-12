
<?php $__env->startSection('title', 'index'); ?>
<?php $__env->startSection('contain'); ?>
<div class="d-flex justify-content-between align-items-center">
    <h1>Product List</h1>
    <a href="<?php echo e(route('product.create')); ?>"  class="btn btn-primary">Add Product</a>
</div>
<?php if(session('message')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle-fill me-2"></i>
        <?php echo e(session('message')); ?>


        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert"
                aria-label="Close"></button>
    </div>
<?php endif; ?>
<table class="table table-striped text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Stock</th>
        <th>Price</th>
        <th>Category</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($pro->id); ?></td>
        <td><?php echo e($pro->name); ?></td>
        <td><?php echo e($pro->stock); ?></td>
        <td><?php echo e($pro->price); ?></td>
        <td><?php echo e($pro->category->name); ?></td>
        <td><img src="<?php echo e(asset('storage/' .$pro->image)); ?>" width="50px" height="50px" alt="" class="object-fit-cover"></td>
        <td>
            <a href="<?php echo e(route('product.edit', $pro->id)); ?>" class="btn btn-outline-warning" method="POST">Edit</a>
          <form action="<?php echo e(route('product.destroy', $pro->id)); ?>" class="d-inline">
             <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button  class="btn btn-outline-danger"
            onclick="return confirm('Are ypu sure to delete ?')"
            >Delate</button>
          </form>
        </td>
    </tr>        
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_Laraval\crud_operation\resources\views/product/index.blade.php ENDPATH**/ ?>