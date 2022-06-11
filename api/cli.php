<?php
 include 'conexion.php';

 $IdC = $_POST['Id'];
 $Idir = $_POST['Idr'];
 $Nom = $_POST['Nombre'];
 $Apell = $_POST['Apellido'];
 $Dir = $_POST['Direccion'];
 $Tell = $_POST['Telefono'];
 $Fecha_Nac = $_POST['FechaN'];
 $Est = $_POST['Estado'];
 $DPI = $_POST['DPIC'];
 

//Registro Formulario

$procedure_params = array(
    array($IdC, SQLSRV_PARAM_IN),
    array(&$Idir, SQLSRV_PARAM_IN),
    array(&$Nom, SQLSRV_PARAM_IN),
    array(&$Apell, SQLSRV_PARAM_IN),
    array(&$Dir, SQLSRV_PARAM_IN),
    array(&$Tell, SQLSRV_PARAM_IN),
    array(&$Fecha_Nac, SQLSRV_PARAM_IN),
    array(&$Est, SQLSRV_PARAM_IN),
    array(&$DPI, SQLSRV_PARAM_IN),
    );



$sql = "exec SP_CrearCliente @Id_Cuenta=?,@Id_Direccion=?,@Nombre=?,@Apellido=?,@Direccion=?,@Telefono=?,@Fecha_Nac=?,@Estado=?,@DPI=?; ";




$stmt = sqlsrv_prepare($con, $sql, $procedure_params);





if(sqlsrv_execute($stmt)){

  while($res = sqlsrv_next_result($stmt)){

    echo '
    <script>
    alert("Cliente Guardado Exitosamente");
    window.location = "../clientes.php";
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
    window.location = "../clientes.php";
   </script>
  ';
}


?>