<?php  
include 'conexion.php';

$UserC = $_POST['User'];
$PassC = $_POST['Pass'];


/*
$PassCf ='$lx78hgz';
$UserCf = 'jchacono';

*/
$sql= "SELECT Id_Empleado,Usuario,Contrasena FROM Usuarios_Empleados where Usuario = '$UserC' AND Contrasena = '$PassC'";
$stmt = sqlsrv_query( $con, $sql);

$sqls= "SELECT Id_JefeInmediato,Usuario,Contrasena FROM Usuarios_Jefes where Usuario = '$UserC' AND Contrasena = '$PassC'";
$stmt1 = sqlsrv_query( $con, $sqls);


if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
$Idem = '1';
$Usr = '1';
$Pass = '1';

$Idjf = '1';
$Usrj = '1';
$Passj = '1';



while( $obj = sqlsrv_fetch_object( $stmt)) {
//  echo $obj->Id_Usuario.", ".$obj->Usuario."<br />";
  $Idem = $obj->Id_Empleado;
  $Usr = $obj->Usuario;
  $Pass = $obj->Contrasena;

}

while( $obj = sqlsrv_fetch_object( $stmt1)) {
   //echo $obj->Id_JefeInmediato.", ".$obj->Usuario.", ".$obj->Contrasena."<br />";
   $Idjf = $obj->Id_JefeInmediato;
   $Usrj = $obj->Usuario;
   $Passj = $obj->Contrasena;
    
    }


        if($Usr != 1 and $Pass !=1)
        {
         header("location: ../transacciones.php" );
        
        }if($Usrj !=1 and $Passj !=1){
        
            header("location: ../transacciones.php" );

         
        }else if($Usr = 1 and $Usrj = 1 and $Pass = 1 and $Passj =1){
        
          echo '
          <script>
          alert("Usuario o contraseña incorrecta");
          window.location = "../index.php";
          </script>
          '; 
    
            
        }

    


        $procedure_params = array(
            array($UserC, SQLSRV_PARAM_IN),
            array(&$PassC, SQLSRV_PARAM_IN),
            );
        
        
        
        $sqld = "exec Logeo @Usuario=?,@Contrasena=?; ";
        
        
        $stmt2 = sqlsrv_prepare($con, $sqld, $procedure_params);
        
        
        if(sqlsrv_execute($stmt2)){
          while($res = sqlsrv_next_result($stmt2)){
           
          }
        
        }else{
          die( print_r( sqlsrv_errors(), true));
        }

?>