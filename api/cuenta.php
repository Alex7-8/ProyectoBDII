<?php
 include 'conexion.php';

 $DPIT = $_POST['DPI'];
 $Idag = $_POST['IdA'];
 $Id_est= $_POST['idec'];
 $Sd = $_POST['sl'];
 $Tipo = $_POST['Tc'];
 $Mon = $_POST['Mn'];

 

//Registro Formulario

$procedure_params = array(
    array($DPIT, SQLSRV_PARAM_IN),
    array(&$Idag, SQLSRV_PARAM_IN),
    array(&$Id_est, SQLSRV_PARAM_IN),
    array(&$Sd, SQLSRV_PARAM_IN),
    array(&$Tipo, SQLSRV_PARAM_IN),
    array(&$Mon, SQLSRV_PARAM_IN),
    );



$sql = "exec SP_CrearCuenta @DPI=?,@Id_Ag=?,@id_estadoCuenta=?,@Saldo=?,@Id_Tipo_C=?,@Moneda=?; ";




$stmt = sqlsrv_prepare($con, $sql, $procedure_params);





if(sqlsrv_execute($stmt)){

  while($res = sqlsrv_next_result($stmt)){

    echo '
    <script>
    alert("Cliente Guardado Exitosamente");
    window.location = "../cuentas.php";
    </script>
    '; 
  
 }
  // Output params are now set,


 //print_r($procedure_params);
}else{

  
 die( print_r( sqlsrv_errors(), true));
$pr = array(sqlsrv_errors());

print_r($pr);


  echo '
    <script>
    alert("Hubo un error al Crear el Cliente");
    window.location = "../cuentas.php";
   </script>
  ';
}


?>