<?php
#Arreglar actualizar para poder dejar la imagen vacia, para poder actualizar sin tener que poner la imagen.
require_once('crud_songs.php');
require_once('song.php');
$crud=new CrudSong();
$song= new song();
$song=$crud->obtenersong($_GET['id']);

?>
<html lang="es">
<head>
    <title>Actualitzar cançó</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form style="padding-left : 100px" id="register-form" enctype=multipart/form-data action='administrar_song.php' method='post'>
    <div class="form">
        <h1>Actualitza les dades de la cançó</h1>
        <input type='hidden' name='id' value='<?php echo $song->getId()?>'>
        <h1>Introdueix les dades de la cancó</h1>
        <label>Nom:</label>
        <input style="max-width: 40%" id="nom" name="nom" value='<?php echo $song->getNom()?>' type="text" class="form-control" placeholder="Nom" maxlength="20" required>
        <label>Artista:</label>
        <input style="max-width: 40%" id="artista" name="artista" value='<?php echo $song->getArtista()?>' type="text" class="form-control" placeholder="Artista" maxlength="20" required>
        <label>Nota:</label>
        <input style="max-width: 40%" id="nota" name="nota" value='<?php echo $song->getNota()?>' type="text" class="form-control" placeholder="Nota" maxlength="20" required>
        <input type='hidden' name='actualizar' value='actualizar'>
        <input type='submit' name="submit" onclick="return validar()" value='Actualizar'>
        <a href="index-songs.php?pagina=1">Tornar</a>
    </div>
    <script>
        function validar() {
            let nom, artista, nota, expresionLet;
            nom = document.getElementById("nom").value;
            artista = document.getElementById("artista").value;
            nota = document.getElementById("nota").value;
			

            expresionLet = new RegExp("^[a-zA-ZñçáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ ]*$");

            if (nom=== "" || artista === "" || nota === "") {
                alert("ERROR: Tots els camps són obligatoris");
                return false;
            } else if (nom.length > 20) {
                alert("ERROR: El nom es massa llarg");
                return false;
            } else if (!expresionLet.test(nom)) {
                alert("ERROR: El nom només pot contenir lletres");
                return false;
            } 
        }
    </script>
</form>
</body>
</html>