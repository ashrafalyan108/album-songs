<html lang="es">
<head>
    <title>Introduir cançó</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<form style="padding-left : 100px; max-width: 50%" id="register-form" action='administrar_song.php' method='POST' enctype="multipart/form-data">
    <div class="form">
		<h1>Introducció de nova cançó</h1>
        <h4>Introdueix les dades de la nova cançó</h4>
        <label>Nom:</label>
        <input style="max-width: 40%" id="nom" name="nom" type="text" class="form-control" placeholder="Nom" maxlength="20" required>
        <label>Artista:</label>
        <input style="max-width: 40%" id="artista" name="artista" type="text" class="form-control" placeholder="Artista" maxlength="20" required>
        <label>Nota:</label>
        <input style="max-width: 40%" id="nota" name="nota" type="text" class="form-control" placeholder="Nota" maxlength="20" required>
		<!--
        <label>Contrasenya:</label>
        <input style="max-width: 40%" id="contra" name="contra" type="password" class="form-control" placeholder="Contrasenya" maxlength="20" required>
        <label for="rol">Rol:</label>
        <select  style="width : 200px" class="form-control" name="rol" id="rol">
            <option value=""> Tria un rol </option>
            <option value="usuari">Usuari</option>
            <option value="editor">Editor</option>
            <option value="admin">Administrador</option>
        </select> -->
        <input type='hidden' name='insertar' value='insertar'>
    </div>
    <input type="submit" id="guardar" name="submit" onclick="return validar()" value='Guardar'>
    <a href="index-songs.php?pagina=1">Tornar</a>
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
            } else if (nom.length > 30) {
                alert("ERROR: El nom és massa llarg");
                return false;
            } else if (artista.length > 30) {
                alert("ERROR: L'artista és massa llarg");
                return false;
            } 
        }
    </script>
</form>
</body>
</html>