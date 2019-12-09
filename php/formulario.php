<?php

$nombre = $_POST ['nombre'];
$telefono = $_POST ['telefono'];
$mensaje = $_POST ['mensaje'];

echo $nombre,$telefono;$mensaje;

if(mail('pepito@gmail.com',$nombre,$telefono,$mensaje)) {
echo "enviado";
}else{
   echo "Lo ciento tenemos problemas de red" 
}  
?>