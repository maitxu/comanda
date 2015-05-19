<?php 
$conexion = mysqli_connect("localhost","root","12345678","comanda");
mysqli_set_charset($conexion,"Utf8") or die("sss");

if(isset($_POST["insertar"])){
	print_r($conexion);

	print_r($_POST['categoria']);

		$sql1="INSERT INTO categorias('nombre') VALUES('".$_POST["categoria"]."')";
	print_r($sql1);

		$resultado1 = mysqli_query($conexion,$sql1);

	$sql2="INSERT INTO productos VALUES('".$_POST["categoria"]."',NULL,'".$_POST["nombre"]."','".$_POST["descripcion"]."','".$_POST["precio"]."','".$_POST["stock"]."','".$_POST["activado"]."','".$_POST["img"]."')";

	print_r($sql2);

	header("location:productos_lista.php");
	
}



?>