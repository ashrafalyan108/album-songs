<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pàgina de Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <form class="form-signin" action="loginValidate.php" method="POST">
        <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="" width="160" height="160">
        <h1 class="h3 mb-3 font-weight-normal">Inicia sessió</h1>
        <label for="check_user" class="sr-only">Email address</label>
        <input type="text" id="check_user" name="check_user" class="form-control" placeholder="Usuari" required autofocus>
        <label for="check_password" class="sr-only">Password</label>
        <input type="password" name="check_password" id="check_password" class="form-control" placeholder="Contrasenya" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Inicia sessió</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020</p>
    </form>
</body>
</html>
