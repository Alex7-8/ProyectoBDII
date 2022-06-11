<?php
 include 'conexion.php';

$UserF = $_POST['Usr'];
$PassF = $_POST['Pss'];
$IdF = $_POST['Id'];
$NombreF = $_POST['Nombre'];
$CorreoF = $_POST['Correo'];
$DetalleF = $_POST['Detalle'];


//Registro Formulario

$procedure_params = array(
    array($IdF, SQLSRV_PARAM_IN),
    array(&$NombreF, SQLSRV_PARAM_IN),
    array(&$UserF, SQLSRV_PARAM_IN),
    array(&$PassF, SQLSRV_PARAM_IN),
    array(&$CorreoF, SQLSRV_PARAM_IN),
    array(&$DetalleF, SQLSRV_PARAM_IN),
    );


  // $sql = "exec SP_CrearCuenta @DPI=?,@Id_Ag=?,@id_estadoCuenta=?,@Saldo=?,@Id_Tipo_C=?,@Moneda=?; ";


$sql = "exec SP_Soporte @Id=?,@Nombre=?,@Usr=?,@pass=?,@Correo = ?,@Detalles=?; ";




$stmt = sqlsrv_prepare($con, $sql, $procedure_params);


if(sqlsrv_execute($stmt)){

  //while($res = sqlsrv_next_result($stmt)){

    echo '
    <script>
    alert("Formulario enviado, debera esperar de 48 a 72 horas para que validemos los datos proporcionados y podamos brindarle una solucion.");
    window.location = "../index.php";
    </script>
    '; 
    
 //}
  // Output params are now set,


 //print_r($procedure_params);
}else{
//die( print_r( sqlsrv_errors(), true));

  echo '
    <script>
    alert("Hubo un error");
    window.location = "../index.php";
   </script>
  ';
}

?>
