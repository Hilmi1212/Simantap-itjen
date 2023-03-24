<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ITJEN | Log in</title>

    <!-- Google Font: Source Sans Pro -->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <link href="css/sign-in.css" rel="stylesheet">


</head>

<body class="text-center hold-transition login-page text-bg-dark bg-gradient">


    <main class="form-signin w-100 m-auto">
        <form action="{{ route('postlogin') }}" method="post">
            {{ csrf_field() }}

            <div>
                <img class="mb-4" src="img/logokemenag.png" alt="" width="100" height="100">
                <h1 class="form-signin w-100 m-auto">Simantap ITJEN</h1>
            </div>
            <h1 class="h3 mb-3 fw-normal"></h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" placeholder="Email">
                <label for="floatingInput">Email address</label>

            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        </form>

    </main>





    <!-- jQuery -->

</body>

</html>
