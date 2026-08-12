
<?php $__env->startSection('title', 'index'); ?>
<?php $__env->startSection('contain'); ?>
<div class="d-flex justify-content-between align-items-center">
    <h1>Category List</h1>
    <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary">+ Category</a>
</div>
<table class="table table-striped text-center align-middle">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Decription</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($cat->id); ?></td>
        <td><?php echo e($cat->name); ?></td>
        <td><?php echo e($cat->description); ?></td>
        <td>
            <a href="<?php echo e(route('category.edit',$cat->id)); ?>" class="btn btn-outline-warning" method="POST">Edit</a>
          <form action="<?php echo e(route('category.destroy', $cat->id)); ?>"  class="d-inline">
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
<?php echo e($categories->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_Laraval\crud_operation\resources\views/category/index.blade.php ENDPATH**/ ?>