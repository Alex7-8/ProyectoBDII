<?php

$srva="DESKTOP-BGA7HUF";
$basea="DB_Banco_GR_UMG";
$usera="SA";
$passa="55alex26";
  
$informaciona=array("Database"=>$basea, "UID"=>$usera, "PWD"=>$passa);

$con=sqlsrv_connect($srva,$informaciona);




if( $con === false ) {
   // die( print_r( sqlsrv_errors(), true));
   $srv="DESKTOP-FQAT5BV";
   $base="DB_Banco_GR_UMG";
   $user="SA";
   $pass="55alex26";
  
$informacion=array("Database"=>$base, "UID"=>$user, "PWD"=>$pass);

$con=sqlsrv_connect($srv,$informacion);
if($con){
   echo "Conectado";
   
   
   }else{
    echo "Fallo la conexion";
   
   
   }

} if($con){
echo "Conectado";


}else{
 echo "Fallo la conexion";


}

?>

