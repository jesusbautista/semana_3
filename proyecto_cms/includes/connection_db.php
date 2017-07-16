<?php 
	#archivo de conexion de base de datos, deberia funcionar pero no sirve
	#por eso esta comentado
	#require_once 'constants.php';
 ?>



<?php 
	#conectando a la base de datos
	$conexion=mysql_connect('localhost','root','');

	if (!$conexion) 
	{
		die("No se ha podido conectar a la base de datos:".mysql_error());
	}

	#seleccionando la base de datos
	$bd_seleccionada=mysql_select_db('cursos_online',$conexion);
	if (!$bd_seleccionada) 
	{
		die("No se ha podido seleccionar la base de datos".mysql_error());
	}
 ?>