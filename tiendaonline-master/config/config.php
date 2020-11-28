<?php 

$servidor=" ecommerceaplicada.database.windows.net";
$usuario="admin123";
$contrasena="KNavarro*1";
$bd="EcommerceDataBase";

$conexion=mysql_connect($servidor,$usuario,$contrasena) or die ('No se puede conectar a la base de Datos');
$basededatos=mysql_select_db($bd,$conexion) or die ('No existe conexion con la base de datos');

?>