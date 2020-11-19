<?php
require_once('crud_songs.php');
require_once('song.php');



$crud= new CrudSong();
$song= new song();


if(isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $artista = $_POST["artista"];
    $nota = $_POST["nota"];


    $campos = array();


    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if (stripslashes(trim($nom == ""))) {
        array_push($campos, "El nom no pot estar buit");
    }
    if(strlen($nom)>20){
        array_push($campos, "El nom no pot tenir més de 20 caracters");
    }
    if (stripslashes(trim($artista == ""))) {
        array_push($campos, "L'artista no pot estar buit");
    }
    if(strlen($artista)>20){
        array_push($campos, "L'artista no pot contenir més de 20 caracters");
    }
    if (stripslashes(trim($nota == ""))) {
        array_push($campos, "La nota no pot estar buida");
    }
    if(strlen($nota)>2){
        array_push($campos, "La nota no pot contenir més de 2 caràcters");
    }
	


    elseif (isset($_POST['insertar'])){
        $song->setNom($_POST['nom']);
        $song->setArtista($_POST['artista']);
        $song->setNota($_POST['nota']);
        $crud->insertar($song);
        header('Location: index-songs.php');
    } elseif (isset($_POST['actualizar'])) {

        require_once 'conexion.php';

        $db=Db::conectar();
        $select=$db->query('SELECT * FROM songs');
        $song->setId($_POST['id']);
        $song->setNom($_POST['nom']);
        $song->setArtista($_POST['artista']);
        $song->setNota($_POST['nota']);
        $crud->actualizar($song);
        header('Location: index-songs.php');
    }
} elseif (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'e') {

        require_once 'conexion.php';

        $db=Db::conectar();
        $select=$db->query('SELECT * FROM songs');
        foreach ($select->fetchAll() as $row_s) {
            $id = $row_s['id'];
        }
        $crud->eliminar($_GET['id']);
        header('Location: index-songs.php');
    }
}else{
    header('Location: index-songs.php');
}