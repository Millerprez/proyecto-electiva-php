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
            header("Location: http://localhost/php/proyecto-electiva-php/index.php", TRUE, 301);
            break;

        case "Auditor":
            $objControlLogin->asignarPerfil("auditor");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/php/proyecto-electiva-php/index.php", TRUE, 301);
            break;
        case "Validador":
            $objControlLogin->asignarPerfil("validador");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/php/proyecto-electiva-php/index.php", TRUE, 301);
            break;
        case "Verificador":
            $objControlLogin->asignarPerfil("verificador");
            //Miller location: http://localhost/App/proyecto-electiva-php/index.php
            //Duvan location:  http://localhost/app-elect-global/index.php
            header("Location: http://localhost/php/proyecto-electiva-php/index.php", TRUE, 301);
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
    <title>Login Page</title>
    <!--Made with love by Mutiullah Samim -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form name="formEv" action="validarIngreso.php" method="post" class=" mb-auto text-center">
        <div class="card-header">
            <h3>Seleccione perfil para ingresar</h3>
        </div>
        <br>
        <?php
        if ($valid) {
            for ($i = 0; $i < sizeof($perfiles); $i++) {
                if ($perfiles[$i] == "1") { ?>

                    <input type="submit" class="btn btn-info" value="Admin" name="btn" />

                <?php }

                if ($perfiles[$i] == "2") { ?>

                    <input type="submit" class="btn btn-info" value="Auditor" name="btn" />

        <?php }
            }
        } else {
            $msg = "Usuario o clave incorrecta";
        }

        ?>
    </form>
</body>

</html>