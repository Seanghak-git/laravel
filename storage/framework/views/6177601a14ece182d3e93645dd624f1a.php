
<?php $__env->startSection('title', 'index'); ?>
<?php $__env->startSection('contain'); ?>
    <div class="d-flex justify-content-between align-items-center">
        <h1>User List</h1>
        <a href="" class="btn btn-primary">+Add User</a>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p>ID</p>
                    <p>Name :</p>
                    <p>Gender</p>
                    <p>Age</p>
                    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project_Laraval\crud_operation\resources\views/user/index.blade.php ENDPATH**/ ?>