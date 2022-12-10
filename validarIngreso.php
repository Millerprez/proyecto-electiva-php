<?php
include("modelo/Login.php");
include("control/controlConexion.php");
include("control/ctrLogin.php");


$id     = "";
$clave  = "";
$msg    = "";
$bot    = "";
$perfiles = [];


try {
    if (isset($_POST["txtId"])) $id          = $_POST["txtId"];
    if (isset($_POST['txtClave'])) $clave  = $_POST['txtClave'];
    if (isset($_POST['btn'])) $bot = $_POST['btn'];

    $objLogin = new Login($id, $clave);
    $objControlLogin = new ctrLogin($objLogin);
    $valid = $objControlLogin->ValidarIngreso();

    if ($valid) {
        $perfiles = $objControlLogin->cargarPerfiles($id);
    }

    switch ($bot) {
        case "Admin":
            $objControlLogin->asignarPerfil("admin");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/App/proyecto-electiva-php/index.php", TRUE, 301);
            break;

        case "Auditor":
            $objControlLogin->asignarPerfil("auditor");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/App/proyecto-electiva-php/index.php", TRUE, 301);
            break;
        case "Validador":
            $objControlLogin->asignarPerfil("validador");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/App/proyecto-electiva-php/index.php", TRUE, 301);
            break;
        case "Verificador":
            $objControlLogin->asignarPerfil("verificador");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/App/proyecto-electiva-php/index.php", TRUE, 301);
            break;
        case "Aceptar":
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location:  http://localhost/App/proyecto-electiva-php/login.php", TRUE, 301);
            break;
    }
} catch (Exception $objExp) {
    echo 'Se presentó una excepción: ',  $objExp->getMessage(), "\n";
}

?>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Validacion ingreso</title>
   
    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <form name="formEv" action="validarIngreso.php" method="post" class=" mb-auto text-center">

        <?php
        if ($valid) { ?>
            <div class="card-header">
                <h3>Seleccione perfil para ingresar</h3>
            </div>
            <br>
            <?php
            for ($i = 0; $i < sizeof($perfiles); $i++) {
                if ($perfiles[$i] == "1") { ?>

                    <input type="submit" class="btn btn-info" value="Admin" name="btn" />

                <?php }

                if ($perfiles[$i] == "2") { ?>

                    <input type="submit" class="btn btn-info" value="Auditor" name="btn" />

                <?php }

                if ($perfiles[$i] == "3") { ?>

                    <input type="submit" class="btn btn-info" value="Verificador" name="btn" />

                <?php }

                if ($perfiles[$i] == "4") { ?>

                    <input type="submit" class="btn btn-info" value="Validador" name="btn" />

            <?php }
            }
        } else {
            ?>
            <script type="">
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href="">Why do I have this issue?</a>'
                })
            </script>
        <?php
        }

        ?>
    </form>
</body>

</html>