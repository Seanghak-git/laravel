<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">

    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="text-center mb-3">
                    <h1 class="fw-bold text-primary">MyApp</h1>
                </div>

                <div class="card border-0 shadow-sm rounded-3">

                    <div class="card-body p-4">

                        <div class="text-center mb-3">
                            <h2 class="fw-bold">Create a new account</h2>
                            
                        </div>

                        <hr>

                        <form action="{{route('register')}}" method="POST" class="needs-validation" novalidate>
                                @csrf
                            <div class="mb-3">
                                <label for="">Full name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Full Name">
                            </div>

                            <div class="mb-3">
                                <label for="">Email Address🏡</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="name@example.com">
                            </div>

                            <div class="mb-3">
                                <label for="">Password🔑</label>
                                <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="New password">
                            </div>

                            <button type="submit" class="btn btn-success btn-lg w-100 fw-bold">
                                Sign Up
                            </button>

                        </form>

                        <div class="text-center mt-3 flex ">
                            <p>Already have an account?

                                <a href="{{route('auth.loginform')}}" class="text-primary fw-semibold text-decoration-none">
                                    Sigin
                                </a>
                            </p> 
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</body>

</html>
