<?php include"php/cabecera.php" ?>
<!doctype html>
<html lang="en">
<body>
	<div id="contenedor">
<div id="enmarcado" class="container">
<div  class="container">

<?php
$consulta=mysql_query("select *from productos WHERE destacado='1' && existencias>0 LIMIT 11");
while($fila=mysql_fetch_array($consulta))
{ 

$consulta2=mysql_query(" SELECT * FROM imagenesproductos WHERE id_producto='".$fila['id']."' LIMIT 1;");
while($fila2=mysql_fetch_array($consulta2))
{
	echo"<div id='productos' class='paneldestacados panel-info col-xs-12 col-sm-6 col-md-6 col-lg-6'> ";
	echo" <div class='panel-heading '><h><a href='producto.php?id=".$fila['id']."'>".$fila['nombre']."</a></h></div> ";
	echo"<img src='photo/".$fila2['imagen']."' width=100px class=".'img-rounded'."> "; 
}
	echo"<div class='col-xs-4 col-sm-4 col-md-4  col-lg-6'>";
	echo "<h3></h3>";
	echo "<p>Precio $".$fila['precio']."</p>";
	echo"Cantidad:<input type='number' class='btn btn-default' value='1' max='10' min='1' id='numero".$fila['id']."'>";  
	echo "<a href='producto.php?id=".$fila['id']."'><button class='btn btn-ifno'> Mas informacion </button></a>";
	echo "<button value='".$fila['id']."'class='botoncompra btn btn-default'> Al carrito </button>";
	echo"</div>";
	echo"</div>";
}
mysql_close();
?>
</div>
</div>
</div>
</body>
</html>
<?php include"php/piedepagina.php";?>