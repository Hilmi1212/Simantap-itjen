<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>ITJEN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/cover.css" rel="stylesheet">


    <!-- Custom styles for this template -->

</head>

<body class="d-flex h-100 text-center text-bg-dark bg-gradient">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>

            </div>
        </header>
        @if (@auth()->user()->level == 'admin')
            <script type="text/javascript">
                window.location.replace("dashboard");
            </script>
            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="dashboard" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif

        @if (@auth()->user()->level == 'usertu')
            <script type="text/javascript">
                window.location.replace("tupage");
            </script>
            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="tupage" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif
        @if (@auth()->user()->level == 'auditor')
            <script type="text/javascript">
                window.location.replace("auditorpage");
            </script>
            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="auditorpage" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif
        @if (@auth()->user()->level == 'App1')
            <script type="text/javascript">
                window.location.replace("apppage");
            </script>
            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="apppage" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif
        @if (@auth()->user()->level == 'App2')
            <script type="text/javascript">
                window.location.replace("appbpage");
            </script>
            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="appbpage" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif
        @if (@auth()->user()->level == 'App3')
            <script type="text/javascript">
                window.location.replace("appcpage");
            </script>

            <main class="px-3">
                <h1>Selamat Datang</h1>
                <p class="lead"> INSPEKTORAT JENDERAL KEMENTERIAN AGAMA REPUBLIK INDONESIA.</p>
                <p class="lead">
                    <a href="appcpage" class="btn btn-lg btn-light fw-bold border-white bg-white">GO</a>
                </p>
            </main>
        @endif


        <footer class="mt-auto text-white-50">
            <p>ITJEN Wilayah II <a href="#" class="text-white"></a>, by <a href="#"
                    class="text-white">@ITJEN</a>.</p>
        </footer>
    </div>



</body>

</html>
