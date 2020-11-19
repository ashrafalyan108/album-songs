<?php
$rol = $_COOKIE["rol"];
if(!isset($rol)){
    ?>
    <!doctype html>
    <html lang="es" xmlns:https="http://www.w3.org/1999/xhtml">
    <head>
        <title>Pàgina Principal</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </head>
    <body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">Pàgina Principal</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <p><b>No has iniciat sessió!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></p>
                    <a class="btn btn-sm btn-outline-secondary" href="login.php">Inicia sessió</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="index.php">Index</a>
                <a class="p-2 text-muted" href="login.php">Inicia sessió</a>
            </nav>
        </div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Pàgina principal - Pràctica M9</h1>
                <p class="lead my-3">Inicia sessió per a tenir contingut personalitzat, editar contingut, afegir contingut...</p>
                <p class="lead mb-0"><a href="login.php" class="text-white font-weight-bold">Inicia sessió...</a></p>
            </div>
        </div>
    </div>
    </body>
    </html>
<?php }elseif($rol == "admin"){ ?>
    <!doctype html>
    <html lang="es">
    <head>
        <title>Pàgina Principal - Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </head>
    <body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">PHP M9</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <?php
                    echo "<p>Benvingut usuari <b>".$_COOKIE["usuario"]."</b></p>".str_repeat('&nbsp;', 2)."<p>El teu rol és: <b>".$_COOKIE["rol"]."</b> </p>". str_repeat('&nbsp;', 2);
                    ?>
                    <a class="btn btn-sm btn-outline-secondary" href="logout.php">Tancar sessió</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="index-usuaris.php">Administrar Usuaris</a>
                <a class="p-2 text-muted" href="index-songs.php">Editar materials</a>
                <a class="p-2 text-muted" href="#">Índex</a>
            </nav>
        </div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Benvingut admin!</h1>
                <p class="lead my-3">Fes clic als enllaços per editar usuaris o editar continguts.</p>
                <!-- <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p> -->
            </div>
        </div>
    </body>
    </html>
<?php }elseif($rol == "usuari"){ ?>
    <!doctype html>
    <html lang="es">
    <head>
        <title>Pàgina Principal - Usuari</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </head>
    <body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">PHP M9</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <?php
                    echo "<p>Benvingut usuari <b>".$_COOKIE["usuario"]."</b></p>".str_repeat('&nbsp;', 2)."<p>El teu rol és: <b>".$_COOKIE["rol"]."</b> </p>". str_repeat('&nbsp;', 2);
                    ?>
                    <a class="btn btn-sm btn-outline-secondary" href="logout.php">Tancar sessió</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" href="veure-songs.php">Visualitza material</a>
                <a class="p-2 text-muted" href="index.php">Índex</a>
            </nav>
        </div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Benvingut usuari!</h1>
                <p class="lead my-3">El teu rol et permet visualitzar materials.</p>
                <p class="lead mb-0"><a href="veure-songs.php" class="text-white font-weight-bold">Visualitza materials...</a></p>
            </div>
        </div>
    </body>
    </html>
<?php }elseif($rol == "editor"){?>
    <!doctype html>
    <html lang="es">
    <head>
        <title>Pàgina Principal - Editor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
        <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
        <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
        <script>
            Holder.addTheme('thumb', {
                bg: '#55595c',
                fg: '#eceeef',
                text: 'Thumbnail'
            });
        </script>
    </head>
    <body>
    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark" href="#">PHP M9</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <?php
                    echo "<p>Benvingut usuari <b>".$_COOKIE["usuario"]."</b></p>".str_repeat('&nbsp;', 2)."<p>El teu rol és: <b>".$_COOKIE["rol"]."</b> </p>". str_repeat('&nbsp;', 2);
                    ?>
                    <a class="btn btn-sm btn-outline-secondary" href="logout.php">Tancar sessió</a>
                </div>
            </div>
        </header>
        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
				<a class="p-2 text-muted" href="index-songs.php">Editar materials</a>
                <a class="p-2 text-muted" href="index.php">Índex</a>
            </nav>
        </div>
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Benvingut Editor!</h1>
                <p class="lead my-3">El teu rol et permet editar materials a la base de dades de materials (cançons)</p>
                <p class="lead mb-0"><a href="index-songs.php" class="text-white font-weight-bold">Edita materials...</a></p>
            </div>
        </div>
    </body>
    </html>
<?php } ?>

