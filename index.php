<?php
require 'inc/header.php';

// Archivo de conexion a la DDBB.
require 'inc/defines.php';
?>

<?php

if (!empty($_POST)){
    $stmt = $mysqli->prepare("INSERT INTO User (nickname, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $_POST['nickname'], $_POST['password']);
    $stmt->execute();

    if (!$stmt->error) {
        $success_msg = "El usuario ha sido guardado con éxito";
    } else {
        $error_msg[] = "No se ha podido guardar el usuario.";
    }
}

?>

<!-- PAGINA DE ENTRADA -->
<div style="height: 100vh;width: 100vw;background-image: url('img/backgroundGEN/3rGEN.jpg');">

    <div class="row">
        <div class="container">
            <div class="card col-6 mx-auto mt-5">
                <div class="card-header h2">Nuevo usuario</div>
                <div class="card-body">
                    <form method="POST" action="/index.php">

                        <div class="mb-3">
                            <label for="nicknameinput" class="form-label">Nickname</label>
                            <input type="text" class="form-control" name="nickname" id="nicknameinput">
                        </div>

                        <div class="mb-3">
                            <label for="passwordInput" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="passwordInput">
                        </div>

                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
require 'inc/footer.php';
?>