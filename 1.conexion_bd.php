<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conexion a PHP</title>
</head>
<body>
	<?php 
	#el primer parametro es el servidor local o ip
	$conexion=mysql_connect('localhost','root','');
	if (!$conexion) {
		# code...
		die('No se a podido conectar al servidor');
	}
	else
	{
		echo "Conexion exitosa!!"."<br>";
	
	}

	#mysql_select_db() funcion que permite seleccionar un bd
	$bd_seleccionada=mysql_select_db('test',$conexion);
	
		if (!$bd_seleccionada) 
		{
			die('No existe la base de datos');
		}
		else
		{
		echo "Base de datos seleccionada correctamente"."<br>";
		}
	
	#mysql_query() realiza consultas a la bd

		$consulta=mysql_query('SELECT * FROM vendedores',$conexion);

		#recorrer la base de datos con la funcion mysql_fetch_array();

		while ($fila=mysql_fetch_array($consulta))
		{
			echo $fila [1]. $fila [2]. $fila [3]."<br>";    
		}
	

	 ?>
</body>
</html>

<?php 
	mysql_close($conexion);
 ?>