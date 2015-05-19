<?php include"include/cabecera.php"; ?>
<section id="contenido_admin">

<?php 
echo"<div id='gest_productos'>";
$conexion = mysqli_connect("localhost","root","12345678","comanda");
mysqli_set_charset($conexion,"Utf8") or die("sss");

echo"
<div id='contenedor'>
 <h1>Nuevo Producto</h1>
<form id='nuevo_produ' method='POST' action='guardar.php'>
	<table id='tabla_nuevo' >
		<tr>
			<td>Categoría:</td><td><input type='text' name='categoria'></td>
		</tr>
		<tr>
			<td>Subcategoría:</td><td><input type='text' name='subcategoria'></td>
		</tr>
		<tr>
			<td>Nombre: </td><td><input type='text' name='nombre'></td>
		</tr>
		<tr>
			<td>Precio: </td><td><input type='text' name='precio'></td>
		</tr>
		<tr>
			<td>Activado: </td><td><input type='text' name='activado'>( 0 / 1)</td>
		</tr>
		<tr>
			<td>Imagen: </td><td><input type='text' name='img'></td>
		</tr>
		
	</table>
	<input type='submit' value='Insertar registro' name='insertar' class='boton_modificar'>
</form>

</div>";
?>


</section>





	