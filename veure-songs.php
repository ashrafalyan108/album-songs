<?php
error_reporting(E_ALL ^ E_NOTICE);
header('Content-Type: text/html; charset=utf-8');
require_once('crud_songs.php');
require_once('song.php');

$pagina = $_GET['pagina'];
if (!$pagina) $pagina = 1;
$crud=new CrudSong();
$song= new song();
$limite = $crud->mostrarLim()[1];
if ($pagina>$limite || $pagina<=0){
    header('Location: veure-songs.php?pagina=1');
}
$_GET['pagina'] = $pagina;
$listaSongs=$crud->mostrar();

?>

<html lang="es">
<head>
    <title>Administrar materials</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script
        src="http://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
</head>
<body>

<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Visualitzador cançons</h1>
			<h4>Rol: Usuari</h4>
			<a href="index.php" class="btn btn-secondary my-2">Tornar</a>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($listaSongs as $song) {?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <p class="card-text">
                                    ID: <?php echo $song->getId() ?><br>
                                    Nom: <?php echo $song->getNom() ?><br>
                                    Artista: <?php echo $song->getArtista() ?><br>
                                    Nota: <?php echo $song->getNota() ?><br>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</main>
<nav style="position: absolute; left: 40%;" aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item <?php echo $_GET['pagina']<=1 ? 'disabled' : '' ?>">
            <a class="page-link" href='veure-songs.php?pagina=<?php echo $_GET['pagina']-1; ?>'>Anterior</a>
        </li>

        <?php for ($i = 0; $i<$limite; $i++){ ?>
            <li class="page-item <?php echo $_GET['pagina']== $i+1 ? 'active' : ''?>">
                <a class="page-link" href="veure-songs.php?pagina=<?php echo $i+1 ?>">
                    <?php echo $i+1 ?>
                </a>
            </li>
        <?php } ?>
        <li class="page-item <?php echo $_GET['pagina']>=$limite ? 'disabled' : '' ?> ">
            <a class="page-link" href='veure-songs.php?pagina=<?php echo $_GET['pagina']+1; ?>'>Següent</a>
        </li>
    </ul>
</nav>
</body>
</html>
