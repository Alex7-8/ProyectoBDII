<?php

$srv="DESKTOP-BGA7HUF";
$base="BD_Banco_1456";
$user="SA";
$pass="55alex26";
  
$informacion=array("Database"=>$base, "UID"=>$user, "PWD"=>$pass);

$con=sqlsrv_connect($srv,$informacion);
if( $con === false ) {
    die( print_r( sqlsrv_errors(), true));


}

if($con){
echo "Conectado";
  

}else{
 echo "Fallo la conexion";
}
?>