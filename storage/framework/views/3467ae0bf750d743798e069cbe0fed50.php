<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">

            <div class="col-md-6 col-lg-4">

                <div class="text-center mb-4">
                    <h1 class="fw-bold text-primary">MyApp</h1>
                    <p class="text-muted">
                        Login to your account
                    </p>
                </div>

                <div class="card border-0 shadow-sm rounded-3">
                    <div class="card-body p-4">

                        <form action="<?php echo e(route('auth.login')); ?>" method="POST" class="needs-validation" novalidate>
                                <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="">User Name or Email</label>
                                <input type="text" class="form-control form-control-lg"
                                    placeholder="Email or username">
                            </div>

                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" class="form-control form-control-lg" placeholder="Password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg w-100 fw-bold">
                                Log In
                            </button>

                            <div class="text-center mt-3">
                                <a href="#" class="text-primary text-decoration-none">
                                    Forgot password?
                                </a>
                            </div>

                            <hr>

                            <div class="text-center">
                                <p>Don't have account?

                                    <a href="<?php echo e(route('auth.registerform')); ?>" class="btn btn-success px-4 fw-bold">
                                        Resister
                                    </a>
                                </p>
                            </div>

                        </form>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
<?php /**PATH D:\Project_Laraval\crud_operation\resources\views/auth/login.blade.php ENDPATH**/ ?>