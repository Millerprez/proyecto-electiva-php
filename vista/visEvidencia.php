<?php
  include '../modelo/mdlEvidencia.php';
  include '../control/ControlConexion.php';
  include '../control/ctrEvidencia.php';

  $id    = ""; 
  $tit   = ""; 
  $auEvi = ""; 
  $cond  = ""; 
  $cap   = ""; 
  $secc  = "";
  $artic = ""; 
  $liter = ""; 
  $numls = ""; 
  $parag = ""; 
  $fec   = ""; 
  $corx  = ""; 
  $cory  = "";
  $obse  = ""; 
  $estad = ""; 
  $nomEv = ""; 
  $bot = "";

    if(isset($_POST['txtID']))  $id               = $_POST['txtID'];
    if(isset($_POST['txtTitulo']))$tit            = $_POST['txtTitulo'];
    if(isset($_POST['txtAutor']))$auEvi           = $_POST['txtAutor'];
    if(isset($_POST['ddTipoEvi']))$cond           = $_POST['ddTipoEvi'];
    if(isset($_POST['txtCapitulo']))$cap          = $_POST['txtCapitulo'];
    if(isset($_POST['txtSecciones']))$secc        = $_POST['txtSecciones'];
    if(isset($_POST['txtArticulos']))$artic       = $_POST['txtArticulos'];
    if(isset($_POST['txtLiterales']))$liter       = $_POST['txtLiterales'];
    if(isset($_POST['txtNumerales']))$numls       = $_POST['txtNumerales'];
    if(isset($_POST['txtParagrafos']))$parag      = $_POST['txtParagrafos'];
    if(isset($_POST['txtFecha']))$fec             = $_POST['txtFecha'];
    if(isset($_POST['txtParalelo']))$corx         = $_POST['txtParalelo'];
    if(isset($_POST['txtMeridiano']))$cory        = $_POST['txtMeridiano'];
    if(isset($_POST['txtParalelo']))$dir          = $_POST['txtParalelo'];
    if(isset($_POST['txtObservacion']))$obse      = $_POST['txtObservacion'];
    if(isset($_POST['txtEstado']))$estad          = $_POST['txtEstado'];
    if(isset($_POST['txtNombreEvidencia']))$nomEv = $_POST['txtNombreEvidencia'];
    if(isset($_POST['btn']))$bot = $_POST['btn'];

    switch ($bot) {
      case 'Guardar':
          $objEvidencia = new Evidencia(
            $id    , 
            $tit   , 
            $auEvi , 
            $cond  , 
            $cap   , 
            $secc  ,
            $artic , 
            $liter , 
            $numls , 
            $parag , 
            $fec   , 
            $corx  , 
            $cory  ,
            $obse  , 
            $estad , 
            $nomEv ,
            ""
          );
          $objControlEvidencia = new ctrEvidencia($objEvidencia);
          $objControlEvidencia->guardar();
          break;
  
   }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="">
    </head>
    <body>
      <div class="container">
      <h1 class="mb-3">Evidencias</h1>
        <form name="formEv" action="visEvidencia.php" method="post">
        <div class="row">
            <div class="col">
              <div class="form-floating mb-3">
                <input name="txtID" type="text" class="form-control" id="floatingInput" placeholder="" >
                <label for="floatingInput"> Id</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <input name="txtTitulo" type="text" class="form-control" id="floatingInput2" placeholder="">
                <label for="floatingInput2">Título</label>
              </div>
            </div>
            <div class="col">
              <div class="form-floating mb-3">
                <input name="txtAutor" type="text" class="form-control" id="floatingInput3" placeholder="">
                <label for="floatingInput3">Autor</label>
              </div>
            </div>  
            <div class="col">
              <div class=" form-floating mb-3">
              <select name="ddTipoEvi" class="form-select" aria-label="Default select example">
                <option selected value=" ">Selecione tipo de evidencia</option>
                <option value="a">Mecanismos de selección y evaluación de estudiantes y profesores </option>
                <option value="b">Estructura administrativa y académica </option>
                <option value="c">Cultura de la autoevaluación </option>
                <option value="d">Programa de egresados </option>
                <option value="e">Modelo de bienestar </option>
                <option value="f">Recursos suficientes para garantizar el cumplimiento de las metas </option>
            </select>
              </div>
            </div> 
        </div>
        <div class="row">
          <div class="col">
            <div class="form-floating mb-3">
            <input name="txtCapitulo" type="text" class="form-control" id="floatingInput4" placeholder="">
            <label for="floatingInput4">Capítulo</label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtSecciones" type="text" class="form-control" id="floatingInput5" placeholder="">
              <label for="floatingInput5">Secciones</label>
            </div>
          </div>
       
          <div class="col">
            <div class="form-floating mb-3">
                <input name="txtArticulos" type="text" class="form-control" id="floatingInput6" placeholder="">
                <label for="floatingInput6">Artículos</label>
            </div>
          </div>
          <div class="col">
              <div class="form-floating mb-3">
                <input name="txtLiterales" type="text" class="form-control" id="floatingInput7" placeholder="">
                <label for="floatingInput7">Literales</label>
              </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
                <input name="txtNumerales" type="text" class="form-control" id="floatingInput8" placeholder="">
                <label for="floatingInput8">Numerales</label>
              </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
                <input name="txtParagrafos" type="text" class="form-control" id="floatingInput9" placeholder="">
                <label for="floatingInput9">Parágrafos</label>
              </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtFecha" type="date" class="form-control" id="floatingInput10" placeholder="">
              <label for="floatingInput10">Fecha</label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtParalelo" type="" class="form-control" id="floatingInput11" placeholder="">
              <label for="floatingInput11"> Paralelo </label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtMeridiano" type="text" class="form-control" id="floatingInput12" placeholder="">
              <label for="floatingInput12">Meridiano</label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-floating mb-3">
              <textarea name="txtObservacion" type="text" class="form-control" id="floatingInput13" placeholder="">
              </textarea>
              <label for="floatingInput13">Observación</label>
            </div>
          </div>
        </div>                        
        <div class="row">
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtEstado" type="text" class="form-control" id="floatingInput14" placeholder="">
              <label for="floatingInput14">Estado</label>
            </div>
          </div>
          <div class="col">
            <div class="form-floating mb-3">
              <input name="txtNombreEvidencia" type="text" class="form-control" id="floatingInput15" placeholder="">
              <label for="floatingInput15">Evidencia</label>
            </div>
          </div>
        </div>

          <div class="row mt-4">
            <div class="col">
              
            </div>
           <div class="col">
            <div class="row">
              <div class="col">
                <input type="submit" class="btn btn-success" value="Guardar" name="btn"/>
              </div>
              <div class="col">
                <input type="submit" class="btn btn-primary" value="Consultar" name="btn"/>
              </div>
              <div class="col">
                <input type="submit" class="btn btn-primary" value="Modificar" name="btn"/>
              </div>
              <div class="col">
                <input type="submit" class="btn btn-primary" value="Listar" name="btn"/>
              </div>
              <div class="col">
                <input type="submit" class="btn btn-danger" value="Borrar" name="btn"/>
              </div>
            </div>
           </div> 
      </div> 

    </form>
      </div>
      
    </body>
</html>
