
<?php
include "../vista/header.php";
include "../modelo/datos_modelo.php";
include '../controlador/cuentas_controlador.php';
include '../controlador/edificios_controlador.php';

if (isset($_GET['edificio'])) {
  $controlador=new cuentas_controlador();
  $controlador->crear_cuenta(
    $_GET['edificio'],
    $_GET['apartamento'],
    $_GET['factura'],
    $_GET['pendiente'],
    $_GET['int_pendiente'],
    $_GET['otros_pendiente'],
    $_GET['extra_pendiente'],
    $_GET['multa_pendiente'],
    $_GET['servicios_publicos_pendiente'],
    $_GET['servicios_pendiente'],
    $_GET['ndnc_pendiente'],
    $_GET['actual'],
    $_GET['interes_actual'],
    $_GET['otros_actual'],
    $_GET['extra_actual'],
    $_GET['multa_actual'],
    $_GET['servicios_publicos_actual'],
    $_GET['servicios_actual'],
    $_GET['ndnc_actual'],
    $_GET['usuario']);


  $controlador=new cuentas_controlador();
  $controlador->crear_cuenta($_POST['edificio'],$_POST['apartamento'],$_POST['factura'],$_POST['pendiente'],$_POST['int_pendiente'],$_POST['otros_pendiente'],$_POST['extra_pendiente'],$_POST['multa_pendiente'],$_POST['servicios_publicos_pendiente'],$_POST['servicios_pendiente'],
    $_POST['ndnc_pendiente'],$_POST['actual'],$_POST['interes_actual'],$_POST['otros_actual'],$_POST['extra_actual'],$_POST['multa_actual'],$_POST['servicios_publicos_actual'],$_POST['servicios_actual'],$_POST['ndnc_actual'],$_POST['usuario']);
} else {
  ?>
  <div class="container text-center">


<div  style="background:white; margin:auto auto; margin-top:30px; padding:10px;" class="col-lg-4 col-lg-offset-4 ">
<p class="h1"> Registrar cuenta</p>
  <form action="registrar_cuenta.php" method="post">
    Edificio:<br>
    <select name="edificio" class="form-control">
      <?php
        $controlador2=new edificios_controlador();

        $edificios=$controlador2->obtener_edificios();
        foreach ($edificios as $key) {
          echo '<option value="'.$key["id"].'">'.$key["nombre"].'</option>';
        }
      ?>
    </select class="form-control"><br>
    Apartamento:<br>
    <input type="text"class="form-control" name="apartamento"> <br>
    Factura:<br>
    <input type="text" class="form-control"name="factura"> <br>
    Pendiente:<br>
    <input type="text"class="form-control" name="pendiente"> <br>
    Interes pendiente:<br>
    <input type="text" class="form-control"name="int_pendiente"> <br>
    Otros peniente:<br>
    <input type="text" class="form-control"name="otros_pendiente"> <br>
    Extra pendiente:<br>
    <input type="text"class="form-control" name="extra_pendiente"> <br>
    Multa pendiente:<br>
    <input type="text" class="form-control"name="multa_pendiente"> <br>
    Servicios publicos pendientes:<br>
    <input type="text"class="form-control" name="servicios_publicos_pendiente"> <br>
    Servicios pendientes:<br>
    <input type="text" class="form-control"name="servicios_pendiente"> <br>
    NDNC pendiente:<br>
    <input type="text"class="form-control" name="ndnc_pendiente"> <br>
    Actual:<br>
    <input type="text" class="form-control"name="actual"> <br>
    Interes actual:<br>
    <input type="text"class="form-control" name="interes_actual"> <br>
    Otros actual:<br>
    <input type="text"class="form-control" name="otros_actual"> <br>
    Extra_actual:<br>
    <input type="text"class="form-control" name="extra_actual"> <br>
    Multa actual:<br>
    <input type="text"class="form-control" name="multa_actual"> <br>
    Servicios publicos actual:<br>
    <input type="text"class="form-control" name="servicios_publicos_actual"> <br>
    Servicios atual:<br>
    <input type="text"class="form-control" name="servicios_actual"> <br>
    NDNC actuar:<br>
    <input type="text"class="form-control" name="ndnc_actual"> <br>
    Usuario:<br>
    <input type="text"class="form-control" name="usuario"> <br>


    <input type="submit"class="btn btn-default btn-lg btn-block" value="Registrar">


  <form>
  </div>
</div>
<?php
}
include "../vista/footer.php";
 ?>
</body>
