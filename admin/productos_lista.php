<?php include"include/cabecera.php"; ?>
<section id="contenido_admin">

<?php 
echo"<div id='gest_productos'>";
$conexion = mysqli_connect("localhost","root","12345678","comanda");
mysqli_set_charset($conexion,"Utf8") or die("sss");

$peticion="SELECT p.*, c.nombre AS categoria, sc.nombre AS subcategoria
	FROM productos p
	INNER JOIN subcategorias sc ON sc.id = p.id_subcategoria
	INNER JOIN categorias c ON c.id = p.id_categoria
	ORDER BY p.nombre";
$resultado = mysqli_query($conexion,$peticion);
echo"<table border='1' cellspacing='3'>
	<tr>
		<th>Producto</th>
		<th>Categoría</th>
		<th>Subcategoría</th>
		<th>Precio</th>
		<th>Activo</th>
		<th>Imagen</th>
	</tr>
";
while($fila = mysqli_fetch_array($resultado)){
		
		echo"<tr><td>";
		echo"".$fila['nombre']."</td><td>".$fila['categoria']."</td><td>".$fila["subcategoria"]."</td>
		<td>".$fila["precio"]." €</td>
		<td>".$fila["activo"]."</td>
		<td>".$fila["img"]."</td>

		</tr>";
	}

echo "</table>";

?>





	