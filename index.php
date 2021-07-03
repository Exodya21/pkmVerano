<?php
require 'inc/header.php';

// Archivo de conexion a la DDBB.
require 'inc/defines.php';
?>

<?php

if (!empty($_POST)) {
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

<h1>POKEMON LOCKE</h1>
<div>
    <button>Crear un nuevo perfil</button>
    <button>Entrar a un perfil</button>
</div>
<!-- ----------------- -->

<!-- NUEVO PERFIL -->
<div class="flexBackground">
    <img src="img/backgroundGEN/3rGEN.jpg" alt="Background">

    <header>
        <button>
            <img /> <!-- ICONO DE FLECHA -->
        </button>
        <h1>NUEVO PERFIL</h1>
    </header>

    <body>
        <div>
            <input placeholder="name">
            <label>nicKname</label>
        </div>

        <div>
            <input placeholder="0">
            <label>Vidas</label>
        </div>

        <div>
            <input placeholder="*******">
            <label>Contraseña</label>
        </div>
    </body>
    <footer>
        <button> ENVIAR </button>
    </footer>
</div>

<!-- ------------ -->

<!-- LOGIN -->
<div class="flexBackground">
    <img src="img/backgroundGEN/3rGEN.jpg" alt="Background">

    <header>
        <button>
            <img /> <!-- ICONO DE FLECHA -->
        </button>
        <h1>LOGIN</h1>
    </header>

    <body>
        <div>
            <input placeholder="name">
            <label>nicKname</label>
        </div>

        <div>
            <input placeholder="*******">
            <label>Contraseña</label>
        </div>
    </body>
    <footer>
        <button> ENTRAR </button>
    </footer>
</div>
<!-- ----- -->

<!-- LOCKES -->
<div class="flexBackground">
    <img src="img/backgroundGEN/3rGEN.jpg" alt="Background">

    <header>
        <button>
            <img /> <!-- ICONO DE FLECHA -->
        </button>
        <h1>LOCKES</h1>
    </header>

    <body>
        <div>
            <button>
                <p>RamDom Iberia</p> <!-- Esto serian variables -->
                <p> 14 </p>
                <img> <!-- img corazon con muchos pixeles -->
            </button>

            <button>
                + Crear Un Nuevo Locke
            </button>
        </div>
    </body>
</div>
<!-- ------ -->

<!-- NUEVO LOCKE -->
<div class="flexBackground">
    <img src="img/backgroundGEN/3rGEN.jpg" alt="Background">

    <header>
        <button>
            <img /> <!-- ICONO DE FLECHA -->
        </button>
        <h1>NUEVO LOCKE</h1>
    </header>

    <body>
        <div>
            <input placeholder="name">
            <label>Nombre del Locke</label>
        </div>

        <div>
            <input placeholder="0">
            <label>Vidas Iniciales</label>
        </div>

        <div>
            <input placeholder="Gen">
            <label>Generación</label>
        </div>
    </body>
    <footer>
        <button> CREAR </button>
    </footer>
</div>
-----------

<?php
require 'inc/footer.php';
?>