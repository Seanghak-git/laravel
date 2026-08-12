<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'app')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body class="d-flex">

    <div class="vh-100 d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;"> <a href="/"
            class="d-flex align-items-center gap-4 mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-box-seam-fill"></i>
             <span class="fs-4">Invetory</span> </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> <a href="#" class="nav-link active" aria-current="page">
                <i class="bi bi-speedometer"></i>
                   Dashboard
                </a> </li>
            <li> <a href="{{route('category.index')}}" class="nav-link text-white"> 
                <i class="bi bi-bookmark-plus-fill"></i>
                    Manage Category
                </a> </li>
            <li> <a href="{{route('product.index')}}" class="nav-link text-white"> 
                <i class="bi bi-ui-checks-grid"></i>
                    Manage Products
                </a> </li>
            <li> <a href="{{route('user.index')}}" class="nav-link text-white">
                <i class="bi bi-person-circle"></i>
                    Manage User
                </a> </li>
        </ul>
        <hr>
        <div class="dropdown"> <a href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false"> <img src="https://github.com/mdo.png" alt=""
                    width="32" height="32" class="rounded-circle me-2"> <strong>mdo</strong> </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
        </div>
    </div>
    <main class="mx-4 w-100 mt-4">
        @yield('contain')
    </main>

</body>

</html>
