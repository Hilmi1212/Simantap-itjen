<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ITJEN WIL II | HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="css/style.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/headers.css" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="img/logokemenag.png" alt="Logo" width="40"
                        height="37" class="align-self-top">
                    <small> KEMENTERIAN AGAMA INSPEKTORAT JENDERAL</small>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    </ul>
                    <form class="d-flex" role="search">
                        <button type="button" class="btn btn-outline-light">
                            <a class="nav-link px-3" href="{{ route('logout') }}">Logut</a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    @yield('container')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>
<!-- <footer class="container">
                      <p class="float-end"></p>
                      <p>&copy; 2017–2022 Company, Inc.</a></p>
                    </footer> -->


</html>
