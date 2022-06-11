<?php
 include 'conexion.php';

 $TipoT = $_POST['Tipo'];
 $CuentaO = $_POST['Cuenta_Origen'];
 $CuentaD = $_POST['Cuenta_Destino'];
 $MontoT = $_POST['Monto'];
 
 
 
 //Registro Formulario
 
 $procedure_params = array(
     array($TipoT, SQLSRV_PARAM_IN),
     array(&$MontoT, SQLSRV_PARAM_IN),
     array(&$CuentaO, SQLSRV_PARAM_IN),
     array(&$CuentaD, SQLSRV_PARAM_IN),
     );
 
 
   // $sql = "exec SP_CrearCuenta @DPI=?,@Id_Ag=?,@id_estadoCuenta=?,@Saldo=?,@Id_Tipo_C=?,@Moneda=?; ";
 
 
 $sql = "exec SP_Transferencia @tipotrans=?,@monto=?,@CuentaOrigen=?,@CuentaDestino=?; ";
 
 
 
 
 $stmt = sqlsrv_prepare($con, $sql, $procedure_params);
 



 
 if(sqlsrv_execute($stmt)){
 
   //while($res = sqlsrv_next_result($stmt)){
 
     echo '
     <script>
     alert("Transaccion Realizada Correctamente");
     window.location = "../transacciones.php";
     </script>
     '; 
     
  //}
   // Output params are now set,
 
 
  //print_r($procedure_params);
 }else{

   
  // die( print_r( sqlsrv_errors(), true));
 //$pr = array(sqlsrv_errors());
 
 //print_r($pr);
   echo '
     <script>
     alert("Hubo un error al realizar la transaccion");
     window.location = "../transacciones.php";
    </script>
   ';

 }

?>