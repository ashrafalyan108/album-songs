<?php
#Arreglar actualizar para poder dejar la imagen vacia, para poder actualizar sin tener que poner la imagen.
require_once('crud_usuaris.php');
require_once('usuari.php');
$crud=new CrudUsuari();
$usuari= new usuari();
$usuari=$crud->obtenerusuari($_GET['id']);

?>
<html lang="es">
<head>
    <title>Actualitzar usuari</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form style="padding-left : 100px" id="register-form" enctype=multipart/form-data action='administrar_usuari.php' method='post'>
    <div class="form">
        <h1>Actualitza les dades de l'usuari</h1>
        <input type='hidden' name='id' value='<?php echo $usuari->getId()?>'>
        <h1>Introdueix les dades de l'usuari</h1>
        <label>Nom:</label>
        <input style="max-width: 40%" id="nom" name="nom" value='<?php echo $usuari->getNom()?>' type="text" class="form-control" placeholder="Nombre Usuario" maxlength="20" required>
        <label>Cognom:</label>
        <input style="max-width: 40%" id="cognom" name="cognom" value='<?php echo $usuari->getCognom()?>' type="text" class="form-control" placeholder="Apellido Usuario" maxlength="20" required>
        <label>Usuari:</label>
        <input style="max-width: 40%" id="login" name="login" value='<?php echo $usuari->getLogin()?>' type="text" class="form-control" placeholder="Login Usuario" maxlength="20" required>
        <label>Contrasenya:</label>
        <input style="max-width: 40%" id="contra" name="contra" value='<?php echo $usuari->getContra()?>' type="password" class="form-control" placeholder="Contra Usuario" maxlength="20" required>
        <label for="rol">Rol:</label>
        <select  style="width : 200px" class="form-control" name="rol" id="rol">
            <option value=""> Tria un rol </option>
            <option value="usuari">Usuari</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrador</option>
        </select>
        <input type='hidden' name='actualizar' value='actualizar'>
        <input type='submit' name="submit" onclick="return validar()" value='Actualizar'>
        <a href="index-usuaris.php?pagina=1">Tornar</a>
    </div>
    <script>
        function validar() {
            let nom, cognom, login, contra, rol, expresionLet;
            nom = document.getElementById("nom").value;
            cognom = document.getElementById("cognom").value;
            login = document.getElementById("login").value;
            contra = document.getElementById("contra").value;
            rol = document.getElementById("rol").value;

            expresionLet = new RegExp("^[a-zA-ZñçáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ ]*$");

            if (nom=== "" || cognom === "" || login === "" || contra === "" || rol === "") {
                alert("ERROR: Tots els camps són obligatoris");
                return false;
            } else if (nom.length > 20) {
                alert("ERROR: El nom es massa llarg");
                return false;
            } else if (!expresionLet.test(nombre)) {
                alert("ERROR: El nom només pot contenir lletres");
                return false;
            } else if (cognom.length > 20) {
                alert("ERROR: El cognom és molt llarg");
                return false;
            } else if (!expresionLet.test(cognom)) {
                alert("ERROR: El cognom només pot contenir lletres");
                return false;
            } else if (login.length > 20) {
                alert("ERROR: L'usuari és massa llarg");
                return false;
            }else if (!expresionLet.test(cognom)){
                alert("ERROR: L'usuari només pot contenir lletres");
                return false;
            }
        }
    </script>
</form>
</body>
</html>