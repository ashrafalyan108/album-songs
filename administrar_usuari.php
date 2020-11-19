<?php
require_once('crud_usuaris.php');
require_once('usuari.php');



$crud= new CrudUsuari();
$usuari= new usuari();


if(isset($_POST["submit"])) {
    $nom = $_POST["nom"];
    $cognom = $_POST["cognom"];
    $login = $_POST["login"];
    $contra = $_POST["contra"];
    $rol = $_POST["rol"];

    $campos = array();


    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if (stripslashes(trim($nom == ""))) {
        array_push($campos, "El nombre no puede estar vacio");
    }
    if(!preg_match($patron_texto,$nom)){
        array_push($campos, "El nombre solo puede contener letras");
    }
    if(strlen($nom)>20){
        array_push($campos, "El nombre no puede contener mas de 20 caracteres");
    }
    if (stripslashes(trim($cognom == ""))) {
        array_push($campos, "El apellido no puede estar vacio");
    }
    if(!preg_match($patron_texto,$cognom)){
        array_push($campos, "El apellido solo puede contener letras");
    }
    if(strlen($cognom)>20){
        array_push($campos, "El apellido no puede contener mas de 20 caracteres");
    }
    if (stripslashes(trim($login == ""))) {
        array_push($campos, "El login no puede estar vacio");
    }
    if(strlen($login)>20){
        array_push($campos, "El login no puede contener mas de 20 caracteres");
    }
    if (stripslashes(trim($contra == ""))) {
        array_push($campos, "La contra no puede estar vacia");
    }
    if(strlen($contra)<8){
        array_push($campos, "La contra no puede contener menos de 8 caracteres.");
    }
    if (stripslashes(trim($rol == ""))) {
        array_push($campos, "El rol no puede estar vacio");
    }


    elseif (isset($_POST['insertar'])){
        $usuari->setNom($_POST['nom']);
        $usuari->setCognom($_POST['cognom']);
        $usuari->setLogin($_POST['login']);
        $usuari->setContra($_POST['contra']);
        $usuari->setRol($_POST['rol']);
        $crud->insertar($usuari);
        header('Location: index-usuaris.php');
    } elseif (isset($_POST['actualizar'])) {

        require_once 'conexion.php';

        $db=Db::conectar();
        $select=$db->query('SELECT * FROM usuaris');
        $usuari->setId($_POST['id']);
        $usuari->setNom($_POST['nom']);
        $usuari->setCognom($_POST['cognom']);
        $usuari->setLogin($_POST['login']);
        $usuari->setContra($_POST['contra']);
        $usuari->setRol($_POST['rol']);
        $crud->actualizar($usuari);
        header('Location: index-usuaris.php');
    }
} elseif (isset($_GET['accion'])) {
    if ($_GET['accion'] == 'e') {

        require_once 'conexion.php';

        $db=Db::conectar();
        $select=$db->query('SELECT * FROM usuaris');
        foreach ($select->fetchAll() as $row_s) {
            $id = $row_s['id'];
        }
        $crud->eliminar($_GET['id']);
        header('Location: index-usuaris.php');
    }
}else{
    header('Location: index-usuaris.php');
}