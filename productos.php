
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bienvenido </title>
	<script type="text/javascript" href="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<?php 
echo"<div id='gest_productos'>";
$conexion = mysqli_connect("localhost","root","12345678","comanda");
mysqli_set_charset($conexion,"Utf8") or die("sss");

$peticion="SELECT p.*, c.nombre AS categoria, sc.nombre AS subcategoria
	FROM productos p
	left JOIN subcategorias sc ON sc.id = p.id_subcategoria
	INNER JOIN categorias c ON c.id = p.id_categoria
	ORDER BY p.nombre";
$resultado = mysqli_query($conexion,$peticion);

$peticion2="select * from productos";
$resultado2 = mysqli_query($conexion,$peticion2);
?>
<body>
	<div id="contenedor">
		<section id="opciones_productos">
			<div id="bebida" class="menu_sup_produ">
				<ul>
					<?php 
					while($fila = mysqli_fetch_array($resultado)){
						echo"<li><a href='#''><label>".$fila['subcategoria']."</label></a></li>";
					}
					?>
				</ul>
			</div>
		</section>
		<section id="concretos">
			<div id="produs">
				<h1>Refrescos</h1>
				<ul>
				<?php 
				while($fila1 = mysqli_fetch_array($resultado2)){
					echo"<a href='#''><li><label>".$fila1['nombre']."</label></li></a>";
				}
				?>
					
				</ul>
			</div>
			<div id="subpedido">
				<h1>pedido</h1>
			</div>
		</section>
		<footer>
		
		</footer>
	</div>
</body>
</html>